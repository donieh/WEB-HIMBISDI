<?php
session_start();
include "./login/bdb_13/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

   <head>
      <title>HIMBISDI</title>
      <link rel="icon" href="assets/images/logo.png">
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>himbisdi.itbss.ac.id</title>
      <link rel="stylesheet" href="assets/css/style.css" />
      <script src="https://unpkg.com/feather-icons"></script>
   </head>
   <body>
      <header>
         <nav class="navbar">
            <a href="webmain.html" class="navbar-logo">
               <img
               src="assets/images/logo.png"
               alt="Himbisdi"
               
               /></a>
            <div class="navbar-nav">
               <a href="#home">Home</a>
               <a href="#about">About</a>
               <a href="#contact">Contacts</a>
               <?php
               if (isset($_SESSION['nama'])) {
                  ?>
                  <a href="../UTS/login/bdb_13/index.php">
                     Back to Admin Page</a>
                     <?php
               }
               ?>
            </div>
            <div class="navbar-extra">
               <a href="#" id="menu"><i data-feather="menu"></i></a>
            </div>
         </nav>
      </header>
      <section class="hero" id="home">
         <main class="content">
            <h1>HIM<span>BISDI</span></h1>
            <p>
               Himpunan Mahasiswa Bisnis Digital <br />
               Institut Teknologi dan Bisnis Sabda Setia
            </p>
            <a href="https://www.instagram.com/himbisdi.itbss/" class="cta"
               >JOIN US
            </a>
         </main>
      </section>
      <section id="about" class="about">
         <div class="row">
            <div class="about-img">
               <img src="assets/images/bird.png" />
            </div>
            <div class="content">
               <h3>HIMBISDI ITU APA SIH?</h3>
               <p>
                  Himpunan Mahasiswa Bisnis Digital atau HIMBISDI adalah organisasi
                  kemahasiswaan program studi Bisnis Digital. HIMBISDI merupakan
                  lembaga eksekutif dan koordinatif bagi Mahasiswa program studi
                  Bisnis Digital. HIMBISDI berbasis di ITBSS (Institut Teknologi dan
                  Bisnis Sabda Setia).
               </p>
            </div>
         </div>
      </section>
      <section id="vimi" class="vimi">
         <div class="row">
            <h4 class="visititle">VISI</h4>
            <p class="visiisi">
               Menjadikan HIMBISDI sebagai wadah dan fasilitas bagi mahasiswa Bisnis
               Digital ITBSS yang aktif dan bermanfaat dengan diiringi nilai-nilai
               Kristiani dalam pelaksanaanya.
            <hr>
            </p>
         </div>
         <div class="row">
            <h4 class="misititle">MISI</h4>
            <p class="misiisi">
               <span>1.</span> Menerapkan prinsip-prinsip Kristiani dalam pelaksanaan
               keorganisasian agar tercipta karakter yang bertakwa dan berakhlak
               mulia. <br />
               <span>2.</span> Menyelenggarakan program kerja untuk pengembangan
               potensi secara akademik maupun non-akademik. <br />
               <span>3.</span> Menciptakan iklim berorganisasi yang nyaman dengan
               menumbuhkan rasa <i>sense of belonging</i>.
            </p>
         </div>
      </section>
      <section>
         <h5>STRUKTUR HIMBISDI</h5>
         <div class="struktur">
               <?php
               $no =1;
               $sql="SELECT * FROM pengurus";
               $query=mysqli_query($con,$sql);
               while($row=mysqli_fetch_array($query))
               {
                  $foto = "default.jpg";
               if(!empty($row['foto'])) { $foto = $row['foto']; }
               $link_foto = "../login/bdb_13/images/pengurus/$foto";
              ?>
            <div class="orang">


               <img
                  src="<?=$link_foto;?>"
                  class="wajah"
                  sizes="200px"
                  >
               <h6 class="nama"><?=$row['namapengurus'];?></h6>
               <p class="jabatan"><?=$row['jabatan'];?></p>
               <p class="jabatan2"><?=$row['jabatan2'];?></p>
               <div class="struktursocials">
                  <a href="<?=$row['instagram'];?>" target="_blank">
                  <i img decoding="async" data-feather="instagram"></i>
                  <a href="<?=$row['linkedin'];?>" target="_blank">
                  <i img decoding="async" data-feather="linkedin"></i></a>
                  <i class="periode"> <?=$row['periode'];?> </i>
               </div>
               </div>
         <?php 
            $no++;
            }
        ?>
            </div>
            <!-- <div class="orang">
               <img
                  src="assets/images/hendrik.jpg"
                  class="wajah"
                  sizes="200px"
                  />
               <h6 class="nama">Hendrik Krisma</h6>
               <p class="jabatan">Wakil Ketua HIMBISDI</p>
               <p class="jabatan2"></p>
               <div class="struktursocials">
                  <a href="https://www.instagram.com/hendrikkrisma11/" target="_blank">
                  <i img decoding="async" data-feather="instagram"></i>
                  <a href="https://www.linkedin.com/in/hendrik-krisma-797483252/" target="_blank">
                  <i img decoding="async" data-feather="linkedin"></i></a>
                  <i class="periode"> 2022/2023 </i>
               </div>
            </div>
            <div class="orang">
               <img
                  src="assets/images/rich.jpg"
                  class="wajah"
                  sizes="200px"
                  >
               <h6 class="nama">Richel J.E.R.S.</h6>
               <p class="jabatan">Bendahara</p>
               <p class="jabatan2"></p>
               <div class="struktursocials">
                  <a href="https://www.instagram.com/kthyniewf/" target="_blank">
                  <i img decoding="async" data-feather="instagram"></i>
                  <a href="https://www.linkedin.com/in/richel-jayreh-el-rapha-sumeisey-530607265" target="_blank">
                  <i img decoding="async" data-feather="linkedin"></i></a>
                  <i class="periode"> 2022/2023 </i>
               </div>
            </div>
            <div class="orang">
               <img
                  src="assets/images/cyn.jpg"
                  class="wajah"
                  sizes="200px"
                  />
               <h6 class="nama">Chintya N.</h6>
               <p class="jabatan">Sekretaris 1</p>
               <p class="jabatan2"></p>
               <div class="struktursocials">
                  <a href="https://www.instagram.com/cntyana24/" target="_blank">
                  <i img decoding="async" data-feather="instagram"></i></a>
                  <a href="https://www.linkedin.com/in/chintya-natalie" target="_blank"> 
                     <i img decoding="async" data-feather="linkedin"></i></a>
                     <i class="periode"> 2022/2023 </i>
               </div>
            </div>
            <div class="orang">
            <img
               src="assets/images/feb.jpg"
               class="wajah"
               sizes="200px"
               />
            <h6 class="nama">Febriani N.</h6>
            <p class="jabatan">Sekretaris 2</p>
            <p class="jabatan2"></p>
            <div class="struktursocials">
            <a href="https://www.instagram.com/noviantyfebriani/" target="_blank">
            <i img decoding="async" data-feather="instagram"></i></a>
            <a href="https://www.linkedin.com/in/febriani-novianty-102aa1264/" target="_blank">
            <i img decoding="async" data-feather="linkedin"></i></a>
            <i class="periode"> 2022/2023 </i>
            </div>
            </div>
            <div class="orang">
            <img
               src="assets/images/cristina.jpg"
               class="wajah"
               sizes="200px"
               />
            <h6 class="nama">Cristina</h6>
            <p class="jabatan">Kadep Digipreneur</p>
            <p class="jabatan2">Kepala departemen Digital Enterpreneur</p>
            <div class="struktursocials">
            <a href="https://www.instagram.com/c.rstna__/" target="_blank">
            <i img decoding="async" data-feather="instagram"></i></a>
            <a href="https://www.linkedin.com/in/cristina-b24b42246" target="_blank">
            <i img decoding="async" data-feather="linkedin"></i></a>
            <i class="periode"> 2022/2023 </i>
            </div>
            </div>
            <div class="orang">
            <img
               src="assets/images/yopi.jpg"
               class="wajah"
               sizes="200px"
               />
            <h6 class="nama">Yopita</h6>
            <p class="jabatan">Kadep MEDINFO</p>
            <p class="jabatan2">Kepala departemen Media & Information</p>
            <div class="struktursocials">
            <a href="https://www.instagram.com/yopita._/" target="_blank">
            <i img decoding="async" data-feather="instagram"></i></a>
            <a href="https://www.linkedin.com/in/yopita-637301265/" target="_blank">
            <i img decoding="async" data-feather="linkedin"></i></a>
            <i class="periode"> 2022/2023 </i>
            </div>
            </div>
            <div class="orang">
            <img
               src="assets/images/jimi.jpg"
               class="wajah"
               sizes="200px"
               />
            <h6 class="nama">Jimi</h6>
            <p class="jabatan">Kadep PDSM</p>
            <p class="jabatan2">Kepala departemen Human Resource and  Development</p>
            <div class="struktursocials">
            <a href="https://www.instagram.com/ameu15_/" target="_blank">
            <i img decoding="async" data-feather="instagram"></i></a>
            <a href="https://www.linkedin.com/in/jimi-22202124a/" target="_blank">
            <i img decoding="async" data-feather="linkedin"></i></a>
            <i class="periode"> 2022/2023 </i>
            </div>
            </div>
            <div class="orang">
            <img
               src="assets/images/kim.jpg"
               class="wajah"
               sizes="200px"
               >
            <h6 class="nama">Kimberly N.</h6>
            <p class="jabatan">Kadep Eksternal</p>
            <p class="jabatan2">Kepala departemen Eksternal</p>
            <div class="struktursocials">
            <a href="https://www.instagram.com/kimberly_nathaneil/" target="_blank">
            <i img decoding="async" data-feather="instagram"></i></a>
            <a href="https://www.linkedin.com/in/kimberly-nathaneil-68a382266/" target="_blank">
            <i img decoding="async" data-feather="linkedin"></i></a>
            <i class="periode"> 2022/2023 </i>
            </div>
            </div>
            <div class="orang">
            <img
               src="assets/images/joel.jpg"
               class="wajah"
               sizes="200px">
            <h6 class="nama">Joel Imanuel</h6>
            <p class="jabatan">Kadep SPARTA</p>
            <p class="jabatan2">Kepala departemen Sport, Art, and Language </p>
            <div class="struktursocials">
            <a href="https://www.instagram.com/joel_nine46/" target="_blank">
            <i img decoding="async" data-feather="instagram"></i></a>
            <a href="https://www.linkedin.com/in/joel-imanuel-56651b265/" target="_blank">
            <i img decoding="async" data-feather="linkedin"></i></a>
            <i class="periode"> 2022/2023 </i>
            </div>
            </div>
         </div> -->
      </section>
      <section class="contact" id="contact">
          <div class="contactus">
            <h6>Connect With Us</h6>
            <p>
               HIMBISDI hadir dengan maksud untuk memberikan solusi terhadap
               permasalahan yang dihadapi oleh mahasiswa, dan berusaha untuk
               memajukan seluruh komunitas akademik serta merangsang terciptanya
               karya-karya kreatif melalui berbagai wadah yang tersedia. HIMBISDI
               dapat dihubungi melalui media sebagai berikut.
            </p>
            <div class="sosmed">
               <div class="sosmedlogo">
                  <a><i data-feather="instagram"> </i></a>
                  <div class="sosmedtext">
                     <a href="https://www.instagram.com/himbisdi.itbss/"> @himbisdi.itbss</a>
                  </div>
               </div>
               <div class="sosmedlogo">
                  <a><i data-feather="linkedin"> </i></a>
                  <div class="sosmedtext">
                     <a href="https://www.linkedin.com/company/himbisdi-itbss/mycompany/"> HIMBISDI itbSS </a>
                  </div>
               </div>
               <div class="sosmedlogo">
                  <a><i data-feather="mail"> </i></a>
                  <div class="sosmedtext">
                     <a href="mailto:himbisdi.itbss@gmail.com"> himbisdi.itbss@gmail.com </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="mapping">
            <div>
               <h7>Lokasi Kami</h7>
            </div>
            <div class="row">
               <iframe
                  scrolling="no"
                  marginheight="0"
                  marginwidth="0"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.816762851701!2d109.3385981146093!3d-0.05062603554017083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d5902031edbb3%3A0x686645c078450cbb!2sInstitut%20Teknologi%20dan%20Bisnis%20Sabda%20Setia%2C%20Bridging%20Campus.!5e0!3m2!1sid!2sid!4v1678896691403!5m2!1sid!2sid"
                  title="Gedung Institut Teknologi dan Bisnis Sabda Setia, Jl. Abdul Rahman Saleh No.12, Bangka Belitung Laut, Kec. Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78112"
                  frameborder="0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                  class="map"
                  ></iframe>
            </div>
         </div>
      </section>
      <footer>
         <div class="credit">
            <p>Created by <a href="">Departemen DIGIPRENEUR</a>. | &copy; 2023.</p>
         </div>
      </footer>
      <script>
         feather.replace();
      </script>
      <script src="assets/js/script.js"></script>
   </body>
</html>
