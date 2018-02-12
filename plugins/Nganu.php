<?php

/**
@author : Syandal_ <samay>
@Version : 1.2
*/


class Nganu extends Actions {

	public static function bantuan($channel, $nickname, $args) {
		$help = array();
		
		$help[] = "Perintah Yang tersedia:";
		$help[] = "\x02!metar\x02 ICAO [ICAO ...]; \x02!taf\x02 ICAO [ICAO ...];";
		$help[] = "\x02!vatsim\x02; \x02!greatcircle\x02 (\x02!gc\x02) ICAO ICAO; \x02!airport\x02 ICAO;";
		$help[] = "\x02!carlin\x02 (\x02!c\x02), \x02!lebowski\x02 (\x02!l\x02);";
		$help[] = "\x02!say\x02 #channel pesan; \x02!uptime\x02;";
		$help[] = "\x02!wiki\x02  kata pencarian";
		$help[] = "\x02!google\x02 kata pencarian";
		$help[] = "\x02!pengumuman\x02  sqlite|python|linux";
		$help[] = "\x02!salam\x02 ";
		$help[] = "\x02!wasalam\x02  #nickname";
		$help[] = "\x02!logo\x02 ";
		$help[] = "\x02!baris\x02 ";
		
		return $help;
	}


     public static function pengumuman($channel, $nickname, $args) {
          
          switch ($args[0]) {
          
          case "sqlite" :
              $hasil = array("Pengumuman", 
                             "==========", 
                             "Dear penghuni kanal #ubuntu-indonesia, kali ini kita akan mengadakan kegiatan Belajar Bersama SQLite3",
                             "Untuk info silabus dan browsur silahkan buka dihalaman ini >> https://git.io/vNa41, Pertemuan 1 Jumat 23 Feb 2018",
                             "Untuk demo live selama kegiatan diskusi bisa menggunakan remote ssh view?free01.remoteshare.xyz, password : rahasia123, powered by : netarsl",
                             "Log pertemuan 1 :     (belum ada)",
                             "Log pertemuan 2 :     (belum ada)",
                             "Log pertemuan 3 :     (belum ada)",
                             "Log pertemuan 4 :     (belum ada)",
                             "Log pertemuan 5 :     (belum ada)",
                             "Log pertemuan 6 :     (belum ada)",
                             "Regards",
                             "~annonimouse");                 
             break;
         case "linux" :
             $hasil = "Silabusnya masih dibuat sama iyon";
             break;
         case "python3" :
             $hasil = "Nungguin pencerahan bapak greenshirt";
             break;
         default :
             $hasil = "Argumennya harus diisi pilihannya sqlite, linux atau python3";                  
          }
          
          return $hasil;
     }
     
     public static function baris($channel, $nickname, $args) {
          $keKanal = $args[0];
          unset($args[0]); 
          $args = array_values(array_filter($args));
          
          return array(
               'chan' => $keKanal,
               0 => "================================"
          );
     }
     
     public static function logo($channel, $nickname, $args) {
          $keKanal = $args[0];
          unset($args[0]); 
          $args = array_values(array_filter($args));
          
     
  $hasil = array('// /////////////////////////////////////////////////////////////////////////////////',
                 '//     __  __ _             __            __        __                            //',
                 '//    / / / / /_ __ __ __  / /___ __ ___ / /__  ___/ /___ ___  ___  ___ __ ___    //',
                 '//   / /_/ / _  | // / _ `/ __/ // //__// / _ `/ __ / _  | _ `/ -_||_ </ /^_  |   //',
                 '//  |____ /____/____/_//_/___/,___/    /_/_//_/|___/\___/_//_/|__/____/_/\_,_/    //',
                 '//                                                                                //',
                 '//                                                                                //',
                 '// ///////////////////////////////////////////////////////////////////////////////// ');

     return $hasil;            
     
     }     
     
     public static function salam($channel, $nickname, $args) {
     //  return $nickname . " mengucapkan salam >> Assalamu Alaikum";
     $argumen[0] = $nickname . " mengucapkan salam : ";
     $argumen[1] = "Assalamu Alaikum";
     return $argumen;
}

      public static function wasalam($channel, $nickname, $args) {
      return $nickname . " membalas salam : " . $args[0] . " >> Waalaikum Salam Warrahmutullahi Wabarakatuh";
     }
}
?>
