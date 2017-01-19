@extends('layouts.index')

@section('content')
</head>
<h2 class="center blue-text text-accent 3"><b>Sistem Informasi Inventaris <br>Sub Laboratorium Akper Semarang</b></h2>
<body>
  <div class="section scrollspy" id="menucarousel "name="menucarousel">
    <ul class="carousel">
      <li class="carousel-item">
        <a href="#sejarah"><img src="{{asset('images/homecarousel/6.png')}}" alt=""></a>
      </li>
      <li class="carousel-item">
        <a href="#visimisi"><img src="{{asset('images/homecarousel/7.png')}}" alt=""></a>
      </li>
      <li class="carousel-item">
        <a href="#layanan"><img src="{{asset('images/homecarousel/8.png')}}" alt=""></a>
      </li>
      <li class="carousel-item">
        <a href="#saranaprasarana"><img src="{{asset('images/homecarousel/9.png')}}" alt=""></a>
      </li>
      <li class="carousel-item">
        <a href="#"><img src="{{asset('images/homecarousel/10.png')}}" alt=""></a>
      </li>
    </ul>
  </div>

    <hr>
    <div>
      <a id="sejarah" class="center teal-text"><h3>Sejarah</h3></a>
    </div>

    <div class="card-panel teal lighten-5">
     <p>Laboratorium Keperawatan Program Studi (Prodi) Diploma III dan Diploma IV Keperawatan Semarang sekarang menempati Gedung Laboratorium yang diresmikan oleh Dr. Karneni, MPH, Kepala Kantor Wilayah Departemen Kesehatan Provinsi Jawa Tengah pada hari Rabu tanggal 1 Juni 1994. Gedung ini merupakan bantuan Badan Penyelenggara Pendidikan (BP-3) Pendidikan Ahli Madya (PAM) Keperawatan Semarang.</p>
     <p>Mulai tahun 2001, sesuai dengan Surat Keputusan Menteri Kesehatan dan Kesejahteraan Sosial RI Nomor 298 / MENKES-KESOS / SK / IV/ 2001 tanggal 16 April 2001 dan terakhir diubah dengan Peraturan Menteri Kesehatan RI Nomor 890 / MENKES/ VIII/ 2007 tanggal 2 Agustus 2007 tentang Organisasi dan Tata Kerja Politeknik Kesehatan maka, Laboratorim PAM Keperawatan Semarang berubah menjadi Laboratorium Keperawatan Prodi D III Keperawatan Semarang, yang merupakan salah satu dari prodi di lingkungan Jurusan Keperawatan Semarang Politeknik Kesehatan Semarang.</p>
     <p>Dalam perkembangannya, sejak tahun 2007 Jurusan Keperawatan Politeknik Kesehatan Kemenkes Semarang membuka program studi diploma IV Keperawatan. Pembukaan prodi baru tersebut berdampak pada pelayanan laboratorium keperawatan semarang. Dengan demikian, sejak tahun 2007 sampai sekarang, laboratorium keperawatan juga melayani kegiatan praktek bagi mahasiswa Prodi Diploma III dan Prodi Diploma IV Keperawatan. Selain mahasiswa di lingkungan program studi keperawatan, laboratorium keperawatan pun melayani mahasiswa prodi lain di lingkungan Poltekkes Kemenkes Semarang, diantaranya adalah mahasiswa Teknik Radiodiagnostik dan Radioterapi.</p>
   </div>

   <hr>
   <div>
     <a id="visimisi" class="center light-blue-text"><h3>Visi & Misi</h3></a>
   </div>

   <div class="card-panel light-blue lighten-5">
     <div class="row">
       <div class="col s12 m6 l3"><h4>Visi</h4></div>
       <div class="col s0 m6 l9"><p>Laboratorium Keperawatan Semarang memiliki visi menjadi laboratorium keperawatan berstandar nasional pada tahun 2020.</p></div>
     </div>
     <hr>
     <div class="row">
       <div class="col s12 m6 l3"><h4>Misi</h4></div>
       <div class="col s0 m6 l9">
         <p>1.	Menyelenggarakan pembelajaran keterampilan keperawatan (nursing skills) secara terstruktur dan profesional.</p>
         <p>2.	Memfasilitasi pelayanan penelitian bidang keperawatan yang dilaksanakan oleh sivitas akademika maupun pihak lain yang membutuhkan.</p>
         <p>3.  Memfasilitasi pelayanan kegiatan pengabdian kepada masyarakat.</p>
         <p>4.	Meningkatkan kemampuan pengelolaan laboratorium untuk menjamin terselenggaranya pembelajaran yang sesuai standar ISO 17025.</p>
         <p>5.	Secara bertahap dan berkesinambungan terus melengkapi sarana, prasarana dan alat yang dibutuhkan guna terpenuhinya standar nasional  laboratorium keperawatan.</p>
         <p>6.	Mengembangkan modul, standar prosedur dan metode pembelajaran laboratorium guna mendukung pencapaian standar kompetensi peserta didik. </p>
         <p>7.	Menciptakan keamanan dan keselamatan kerja di laboratorium.</p>
         <p>8.	Menciptakan lingkungan belajar yang kondusif.</p>
       </div>
     </div>
   </div>

   <hr>
   <div>
     <a id="layanan" class="center indigo-text"><h3>Layanan</h3></a>
   </div>

    <ul class="card-panel collapsible  indigo lighten-5" data-collapsible="expandable">
      <li class="white">
        <div class="collapsible-header active  indigo lighten-5"><i class="material-icons">check</i>
          <h4>Pendidikan</h4>
        </div>
        <div class="collapsible-body">
          <p>Kebutuhan Dasar Manusia ( KDM )<br>
          Keperawatan Maternitas<br>
          Keperawatan Anak dan Tumbuh Kembang<br>
          Keperawatan Medikal Bedah<br>
          Keperawatan Jiwa<br>
          Keperawatan Keluarga<br>
          Keperawatan Kegawatdaruratan / Kritis<br>
          </p></div>
      </li>
      <li>
        <div class="collapsible-header indigo lighten-5"><i class="material-icons">check</i>
          <h4>Penelitian</h4>
        </div>
        <div class="collapsible-body">
          <p class="white">Penyediaan sarana dan prasarana penelitian untuk dosen dan mahasiswa di bidang keperawatan</p>
        </div>
      </li>
      <li>
        <div class="collapsible-header indigo lighten-5"><i class="material-icons">check</i>
          <h4>Pengabdian Kepada Masyarakat</h4>
        </div>
        <div class="collapsible-body">
          <p class="white">Penyediaan sarana dan prasarana pengabdian masyarakat untuk dosen dan mahasiswa di bidang keperawatan</p>
        </div>
      </li>
    </ul>

    <hr>

    <div>
      <a id="saranaprasarana" class="center purple-text"><h3>Sarana & Prasarana</h3></a>
    </div>

    <!--awal coba -->
    <ul class="card-panel collapsible  purple lighten-5" data-collapsible="expandable">
      <li class="white">
        <div class="collapsible-header active  purple lighten-5"><i class="material-icons">check</i>
          <h4>Sarana</h4>
        </div>
        <div class="collapsible-body">
          <p>1. Berbagai Peralatan penunjang kegiatan praktikum yang tersedia ditiap-tiap ruang laboratorium termasuk peralatan peraga/ simulasi / phantom yang dapat digunakan untuk aplikasi langsung tindakan keperawatan sebagaimana kondisi riil dilapangan, seperti : phantom pemeriksaan jantung-paru, phantom Kehamilan dan Persalinan, phantom resusitasi jantung-paru, phantom pemasangan kateter, NGT, Infus, dan lain-lain.</p>
            <div class="row">
              <div class="col s6 m6 l6">
                <img class="materialboxed responsive-img" data-caption="Berbagai Jenis Manikin dan Alat Keperawatan Dasar"  src="{{asset('images/galeri/sarana1.png')}}">
              </div>

              <div class="col s6 m6 l6">
                <img class="materialboxed responsive-img" data-caption="Berbagai Jenis Manikin Keperawatan Maternitas "  src="{{asset('images/galeri/sarana3.png')}}">
              </div>
            </div>

            <p>2.	Berbagai alat penunjang pemeriksaan fisik baik manual maupun elektrik seperti : Elektrokardiografi, ophtalmoscope, Otoscope, Tonometri dan lain-lain. </p>
            <div class="row">
              <div class="col s6 m6 l6">
                <img class="materialboxed responsive-img" data-caption="Berbagai Jenis Mesin EKG"  src="{{asset('images/galeri/sarana4.png')}}">
              </div>
              <div class="col s6 m6 l6">
                <img class="materialboxed responsive-img" data-caption="Berbagai Peralatan Pemeriksaan Fisik"  src="{{asset('images/galeri/sarana5.png')}}">
              </div>
            </div>
            <p>3.	Bebagai Penunjang kebutuhan belajar secara visual : Berbagai CD Keterampilan Keperawatan, dan lain-lain. </p>
        </div>
      </li>
      <li class="white">
        <div class="collapsible-header  purple lighten-5"><i class="material-icons">check</i>
          <h4>Prasarana</h4>
        </div>
        <div class="collapsible-body">
          <div class="row">
            <div class="col s6 m6 l6 offset-l3 m3 s3">
              <img class="materialboxed responsive-img" width="650" data-caption="Denah ruang"  src="{{asset('images/galeri/prasarana1.png')}}">
            </div>
            <div class="col s6 m6 l6">
              <p>
                Laboratorium keperawatan Semarang dilengkapi dengan: <br>
                1.	Ruang  Pengelola/Persiapan Alat <br>
                2.	Ruang Pelayanan Peminjaman/Pengembalian Alat <br>
                3.	Ruang Laboratorium Keperawatan Maternitas <br>
                4.	Ruang Laboratorium Keperawatan Anak <br>
                5.	Ruang Laboratorium Keperawatan Medikal Bedah <br>
                6.	Ruang Laboratorium Keperawatan Jiwa/Komunitas <br>
                7.	Ruang Penyimpanan Alat Laboratorium <br>
                8.	Ruang Audio Visual (AV) <br>
              </p>
            </div>
          </div>
        </div>
      </li>
    </ul>
    <!--akhir coba -->

<hr>

<div>
  <a id="tatatertib" class="center red-text"><h3>Tata Tertib</h3></a>
</div>

<div class="card-panel red lighten-5">
 <p>
   1.	Dosen dan mahasiswa <b>WAJIB</b> mengisi buku penggunaan laboratorium <br>
   2.	Selama kegiatan laboratorium berlangsung, mahasiswa <b>WAJIB</b> membawa buku panduan laboratorium. <br>
   3.	Mahasiswa yang meminjam peralatan laboratorium harus memenuhi ketentuan peminjaman dan pengembalian, sebagai berikut: <br>
   <p style="margin-left: 40px">
     <br><b>a.	Peminjaman dan Pengembalian Alat - Laboratorium:</b>
     <p style="margin-left: 80px">
       1)	Peminjam <b>WAJIB</b> mengkonfirmasi / melakukan kontrak peminjaman alat-laboratorium kepada penanggung jawab laboratorium / petugas laboratorium <b>MAKSIMAL</b>  1  hari sebelum penggunaan laboratorium <br>
       2)	Peminjam <b>HANYA</b> dapat melakukan kontrak peminjaman <b>PADA  JAM OPERASIONAL LABORATORIUM</b> (07.30 – 16.00 WIB)<br>
       3)	Peminjaman yang dilakukan pada jam operasiona laboratorium, petugas akan membukakan pintu ruang / laboratorium, dan jika sudah selesai Peminjam wajib melapor kepada petugas laboratorium <br>
       4)	Apabila penggunaan ruang <b>MELEWATI JAM OPERASIONAL LABORATORIUM</b> (16.00 WIB), Peminjam diminta meminjam kunci ruang yang dipinjam kepada penanggung jawab laboratorium / petugas laboratorium <br>
       5)	Saat peminjaman, Peminjam <b>WAJIB MENGISI FORMULIR PEMINJAMAN ALAT</b> <br>
       6)	Mengambil dan mengembalikan peralatan laboratorium dengan pengawasan petugas laboratorium atau dosen pengajar. <br>
       7)	Mengembalikan peralatan laboratorium <b>HARUS</b>  pada tempat yang sudah ditentukan. <br>
       8)	<b>DILARANG</b> membawa peralatan laboratoriutn keluar ruang laboratorium tanpa izin dari petugas laboratorium dan dosen Pengajar. <br>
       9)	<b>DILARANG</b> membawa pulang peralatan laboratorium. <br>
       10)	Peminjaman alat paling lama <b>2 HARI</b> terhitung sejak peminjaman alat hingga praktikum dilaksanakan. <br>
       11)	Pengembalian alat melebihi waktu yang telah ditentukan <b>DIKENAKAN BIAYA DENDA</b> sebesar Rp 10.000,-/hari keterlambatan (Sepuluh Ribu pehari). <br>
     </p>
   </p>
   <p style="margin-left: 40px">
     <br><b>b.	Selama Kegiatan Laboratorium Berlangsung: </b>
     <p style="margin-left: 80px">
       1)	Mahasiswa <b>WAJIB DATANG PALING LAMBAT</b> 5 menit sebelum kegiatan laboratorium dimulai.
       <br>2)	Bagi mahasiswa yang tidak dapat mengikuti kegiatan laboratorium <b>WAJIB MELAPORKAN DIRI</b> ke Dosen pembimbing praktikum.
       <br>3)	Sebelum masuk ruang laboratorium, setiap mahasiswa HARUS sudah mempelajari materi praktikum dan membuat persiapan laboratorium sebelumnya.
       <br>4)	Mahasiswa <b>WAJIB MENGENAKAN JAS LABORATORIUM</b> selama praktikum laboratorium. Bagi mahasiswa yang tidak membawa/mengenakan jas laboratorium <b>TIDAK DIPERKENANKAN MENGIKUTI KEGIATAN PRAKTIKUM</b>.
       <br>5)	<b>DILARANG</b> membuat gaduh di dalam laboratorium.
       <br>6)	<b>DILARANG</b> makan, minum, dan membawa peralatan yang tidak diperlukan di dalam laboratorium.
       <br>7)	<b>WAJIB</b> menjaga kebersihan laboratorium dan harus membuang sampah pada tempat sampah yang sudah ditentukan.
       <br>8)	Semua mahasiswa yang mengunjungi atau praktek di laboratorium, <b>WAJIB</b> merapikan kembali semua inventaris laboratorium.
       <br>9)	Setelah kegiatan laboratorium selesai, semua alat <b>WAJIB UNTUK SEGERA DIKEMBALIKAN</b> ke petugas laboratorium, dilarang untuk meninggalkan alat-alat di dalam laboratorium.
   </p>
 </p>
</div>


<!-- coba -->
<!-- <iframe src="{{asset('docs/tatatertib.docx')}}"></iframe>
<object src="{{asset('docs/tatatertib.docx')}}"><embed src="{{asset('docs/tatatertib.docx')}}"></embed></object> -->

<iframe src="http://docs.google.com/gview?url=http://path.com/to/your/pdf.pdf&embedded=true" 
style="width:600px; height:500px;" frameborder="0"></iframe>
<!-- akhircoba -->


</body>
@endsection
