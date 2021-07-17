<script>
  // Messages Success
  const profil = $(".profil").data("flashdata");
  const changePassword = $(".changePassword").data("flashdata");
  const pendaftaranPengguna = $(".pendaftaranPengguna").data("flashdata");
  const kategoriSeminar = $(".kategoriSeminar").data("flashdata");
  const dosen = $(".dosen").data("flashdata");
  const penilaian = $(".penilaian").data("flashdata");
  const seminarTA = $(".seminarTA").data("flashdata");
  const detailPenilaian = $(".detailPenilaian").data("flashdata");
  const daftarSeminarTA = $(".daftarSeminarTA").data("flashdata");

  const profilEditPassword = $(".profilEditPassword").data("flashdata");

  // Sukses
  if (profil) {
    swal({
      title: "Profil",
      text: "Berhasil " + profil,
      icon: "success",
    });
  } else if (changePassword) {
    swal({
      title: "Password",
      text: "Berhasil " + changePassword,
      icon: "success",
    });
  } else if (pendaftaranPengguna) {
    swal({
      title: "Pengguna",
      text: "Berhasil " + pendaftaranPengguna,
      icon: "success",
    });
  } else if (kategoriSeminar) {
    swal({
      title: "Kategori Seminar",
      text: "Berhasil " + kategoriSeminar,
      icon: "success",
    });
  } else if (dosen) {
    swal({
      title: "Dosen",
      text: "Berhasil " + dosen,
      icon: "success",
    });
  } else if (penilaian) {
    swal({
      title: "Penilaian",
      text: "Berhasil " + penilaian,
      icon: "success",
    });
  } else if (seminarTA) {
    swal({
      title: "Seminar Tugas Akhir",
      text: "Berhasil " + seminarTA,
      icon: "success",
    });
  } else if (detailPenilaian) {
    swal({
      title: "Detail Penilaian",
      text: "Berhasil " + detailPenilaian,
      icon: "success",
    });
  } else if (daftarSeminarTA) {
    swal({
      title: "Daftar Seminar Tugas Akhir",
      text: "Berhasil " + daftarSeminarTA,
      icon: "success",
    });
  }

  // Gagal
  if (profilEditPassword) {
    swal({
      title: "Gagal Ubah Password",
      text: profilEditPassword,
      icon: "error",
    });
  }

  // Tombol-Hapus
  $(".tombol-hapus").on("click", function(e) {
    e.preventDefault();
    const href = $(this).attr("href");
    swal({
      title: "Apakah anda yakin?",
      text: "Data yang ada pilih akan dihapus",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        document.location.href = href;
      }
    });
  });

  // konfirmasi Verifikasi
  $(".tombol-konfirmasi").on("click", function(e) {
    e.preventDefault();
    const href = $(this).attr("href");
    swal({
      title: "Konfirmasi Verifikasi",
      text: "Apakah data yang anda pilih ingin diverifikasi?",
      icon: "info",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        document.location.href = href;
      }
    });
  });
</script>