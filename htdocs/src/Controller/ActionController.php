<?php

namespace Controller;

use App\DB;

class ActionController {
    function init() {
        DB::query("DELETE FROM nihs");
        $xml = simplexml_load_file(SRC."/nihList.xml");
        foreach($xml->item as $item) {
            $sn = $item->sn;
            $no = $item->no;
            $ccmaName = $item->ccmaName;  
            $crltsnoNm = $item->crltsnoNm; 
            $ccbaMnm1 = $item->ccbaMnm1; 
            $ccbaMnm2 = $item->ccbaMnm2;
            $ccbaCtcdNm = $item->ccbaCtcdNm; 
            $ccsiName = $item->ccsiName;
            $ccbaAdmin = $item->ccbaAdmin; 
            $ccbaKdcd = $item->ccbaKdcd;
            $ccbaCtcd = $item->ccbaCtcd; 
            $ccbaAsno = $item->ccbaAsno; 
            $ccbaCncl = $item->ccbaCncl;  
            $ccbaCpno = $item->ccbaCpno; 
            $longitude = $item->longitude; 
            $latitude = $item->latitude;


            $url = $ccbaKdcd . "_" . $ccbaCtcd . "_" . $ccbaAsno;

            $xml2 = simplexml_load_file(SRC."/detail/$url.xml");
             
            $gcodeName = $xml2->item->gcodeName; 
            $bcodeName = $xml2->item->bcodeName; 
            $mcodeName = $xml2->item->mcodeName; 
            $scodeName = $xml2->item->scodeName;
            $ccbaQuan = $xml2->item->ccbaQuan; 
            $ccbaAsdt = $xml2->item->ccbaAsdt; 
            $ccbaLcad = $xml2->item->ccbaLcad; 
            $ccceName = $xml2->item->ccceName;
            $ccbaPoss = $xml2->item->ccbaPoss;
            $ccbaCndt = $xml2->item->ccbaCndt; 
            $image = $xml2->item->imageUrl;
            $content = $xml2->item->content;

            DB::query("INSERT INTO nihs(
                sn,
                no,
                ccmaName,
                crltsnoNm,
                ccbaMnm1,
                ccbaMnm2,
                ccbaCtcdNm,
                ccsiName,
                ccbaAdmin,
                ccbaKdcd,
                ccbaCtcd,
                ccbaAsno,
                ccbaCncl,
                ccbaCpno,
                longitude,
                latitude,
                gcodeName,
                bcodeName,
                mcodeName,
                scodeName,
                ccbaQuan,
                ccbaAsdt,
                ccbaLcad,
                ccceName,
                ccbaPoss,
                ccbaCndt,
                image,
                content
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [
                $sn,
                $no,
                $ccmaName,
                $crltsnoNm,
                $ccbaMnm1,
                $ccbaMnm2,
                $ccbaCtcdNm,
                $ccsiName,
                $ccbaAdmin,
                $ccbaKdcd,
                $ccbaCtcd,
                $ccbaAsno,
                $ccbaCncl,
                $ccbaCpno,
                $longitude,
                $latitude,
                $gcodeName,
                $bcodeName,
                $mcodeName,
                $scodeName,
                $ccbaQuan,
                $ccbaAsdt,
                $ccbaLcad,
                $ccceName,
                $ccbaPoss,
                $ccbaCndt,
                $image,
                $content
            ]);
        }
    }

    function registerNih() {
        extract($_POST);

        $image = $_FILES["image"];
        $filename = time() . txtname($image["name"]);
        move_uploaded_file($image["tmp_name"], IMAGE."/$filename");

        DB::query("INSERT INTO nihs(
            no
            , ccmaName
            , crltsnoNm
            , ccbaMnm1
            , ccbaMnm2
            , ccbaCtcdNm
            , ccsiName
            , ccbaAdmin
            , ccbaKdcd
            , ccbaCtcd
            , ccbaAsno
            , ccbaCncl
            , ccbaCpno
            , longitude
            , latitude
            , gcodeName
            , bcodeName
            , mcodeName
            , scodeName
            , ccbaQuan
            , ccbaAsdt
            , ccbaLcad
            , ccceName
            , ccbaPoss
            , ccbaCndt
            , image
            , content) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [
                $no,
                $ccmaName,
                $crltsnoNm,
                $ccbaMnm1,
                $ccbaMnm2,
                $ccbaCtcdNm,
                $ccsiName,
                $ccbaAdmin,
                $ccbaKdcd,
                $ccbaCtcd,
                $ccbaAsno,
                $ccbaCncl,
                $ccbaCpno,
                $longitude,
                $latitude,
                $gcodeName,
                $bcodeName,
                $mcodeName,
                $scodeName,
                $ccbaQuan,
                $ccbaAsdt,
                $ccbaLcad,
                $ccceName,
                $ccbaPoss,
                $ccbaCndt,
                $filename,
                $content
            ]);
        go("/nihs", "등록되었습니다.");
    }

    function updateNih() {
        extract($_POST);
        
        $nih = DB::find("nihs", $id);

        if(isset($nih->image)) {
            $path = IMAGE."/$nih->image";

            unlink($path);
        }
        
        $image = $_FILES["image"];
        $filename = time() . txtname($image["name"]);
        move_uploaded_file($image["tmp_name"], IMAGE."/$filename");
        
        DB::query("UPDATE nihs SET 
            no = ?
            , ccmaName = ?
            , crltsnoNm = ?
            , ccbaMnm1 = ?
            , ccbaMnm2 = ?
            , ccbaCtcdNm = ?
            , ccsiName = ?
            , ccbaAdmin = ?
            , ccbaKdcd = ?
            , ccbaCtcd = ?
            , ccbaAsno = ?
            , ccbaCncl = ?
            , ccbaCpno = ?
            , longitude = ?
            , latitude = ?
            , gcodeName = ?
            , bcodeName = ?
            , mcodeName = ?
            , scodeName = ?
            , ccbaQuan = ?
            , ccbaAsdt = ?
            , ccbaLcad = ?
            , ccceName = ?
            , ccbaPoss = ?
            , ccbaCndt = ?
            , image = ?
            , content = ? WHERE sn = ?", [
                $no,
                $ccmaName,
                $crltsnoNm,
                $ccbaMnm1,
                $ccbaMnm2,
                $ccbaCtcdNm,
                $ccsiName,
                $ccbaAdmin,
                $ccbaKdcd,
                $ccbaCtcd,
                $ccbaAsno,
                $ccbaCncl,
                $ccbaCpno,
                $longitude,
                $latitude,
                $gcodeName,
                $bcodeName,
                $mcodeName,
                $scodeName,
                $ccbaQuan,
                $ccbaAsdt,
                $ccbaLcad,
                $ccceName,
                $ccbaPoss,
                $ccbaCndt,
                $filename,
                $content,
                $id
            ]);
        go("/nihs", "수정되었습니다.");
    }

    function deleteNih() {
        extract($_GET);
        
        $nih = DB::find("nihs", $id);

        if(isset($nih->image)) {
            $path = IMAGE."/$nih->image";

            unlink($path);
        }
        
        DB::query("DELETE FROM nihs WHERE sn = ?", [$id]);
        
        go("/nihs", "삭제되었습니다.");
    }

    function registerShow() {
        extract($_POST);

        $year = explode("-", $showDate)[0];
        $year = substr($year, 0, 1) == "0" ? substr($year, 1) : $year;
        
        $month = explode("-", $showDate)[1];
        $month = substr($month, 0, 1) == "0" ? substr($month, 1) : $month;

        DB::query("INSERT INTO shows(
            showName,
            showDate,
            showTime,
            organizer,
            place,
            cast,
            rm,
            registDt,
            year,
            month
            ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [
                $showName,
                $showDate,
                $showTime,
                $organizer,
                $place,
                $cast,
                $rm,
                date("Y-m-d"),
                $year,
                $month
            ]);
        go("/$type", "등록되었습니다.");
    }

    function updateShow() {
        extract($_POST);
        
        $year = explode("-", $showDate)[0];
        $year = substr($year, 0, 1) == "0" ? substr($year, 1) : $year;
        
        $month = explode("-", $showDate)[1];
        $month = substr($month, 0, 1) == "0" ? substr($month, 1) : $month;
        
        DB::query("UPDATE shows SET
            showName = ?,
            showDate = ?,
            showTime = ?,
            organizer = ?,
            place = ?,
            cast = ?,
            rm = ?,
            updtDt = ?,
            year = ?,
            month = ?
            WHERE showUid = ?", [
                $showName,
                $showDate,
                $showTime,
                $organizer,
                $place,
                $cast,
                $rm,
                date("Y-m-d"),
                $year,
                $month,
                $id
            ]);
        go("/$type", "수정되었습니다.");
    }

    
    function deleteShow() {
        extract($_GET);
        
        DB::query("DELETE FROM shows WHERE showUid = ?", [$id]);
        
        go("/$type", "삭제되었습니다.");
    }

}