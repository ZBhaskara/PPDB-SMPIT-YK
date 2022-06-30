//Alert berhasil mendaftar
const flashData = $(".flash-data").data("flashdata");
if (flashData) {
	Swal.fire({
		title: "Berhasil Mendaftar",
		text: "Periksa email untuk melihat kode pendaftaran",
		icon: "success",
	});
}

//Alert Hapus data akun
const flashData1 = $(".flash-data-hapus").data("flashdata");
if (flashData1) {
	Swal.fire({
		title: "Data Akun",
		text: "Brehasil " + flashData1,
		icon: "success",
	});
}

const flashData9 = $(".flash-gelombang").data("flashdata");
if (flashData9) {
	Swal.fire({
		title: "Berhasil",
		text: "Gelombang pendaftaran telah " + flashData9,
		icon: "success",
	});
}

//Alert Hapus data pendaftar
const flashData8 = $(".flash-hapus").data("flashdata");
if (flashData8) {
	Swal.fire({
		title: "Data Pendaftar",
		text: "Brehasil " + flashData8,
		icon: "success",
	});
}

// Notif gagal cetak
const flashData3 = $(".flash-data-gagal").data("flashdata");
if (flashData3) {
	Swal.fire({
		title: "Gagal",
		text: flashData3,
		icon: "warning",
	});
}

//Alert open and close pendaftaran
const flashData2 = $(".flash-data-open").data("flashdata");
if (flashData2) {
	Swal.fire({
		title: "Periode Pendaftaran",
		text: "Telah " + flashData2,
		icon: "success",
	});
}

//Verifikasi data pendaftar
const flashData4 = $(".flash-data-verifikasi").data("flashdata");
if (flashData4) {
	Swal.fire({
		title: "Data Pendaftar",
		text: "Telah " + flashData4,
		icon: "success",
	});
}

//Update data pendaftar
const flashData7 = $(".flash-data-update").data("flashdata");
if (flashData7) {
	Swal.fire({
		title: "Data Pendaftar",
		text: "Telah " + flashData7,
		icon: "success",
	});
}

//Gagal mendaftar

const flashData5 = $(".flash-data-gagal-daftar").data("flashdata");
if (flashData5) {
	Swal.fire({
		title: "Gagal Mendaftar",
		text: "NIK Siswa Telah " + flashData5,
		icon: "warning",
	});
}

const flashData10 = $(".flash-img").data("flashdata");
if (flashData10) {
	Swal.fire({
		title: "Berhasil",
		text: "Alur pendaftaran berhasil diperbaharui",
		icon: "success",
	});
}

const flashData11 = $(".flash-img-gagal").data("flashdata");
if (flashData11) {
	Swal.fire({
		title: "Gagal",
		text: "Pilih gambar terlebih dahulu",
		icon: "warning",
	});
}

//konfirmasi hapus data
$(".tombol-hapus").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");
	Swal.fire({
		title: "Apakah Anda Yakin ?",
		text: "Ingin Menghapus Data !",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Hapus Data",
		cancelButtonText: "Batal",
	}).then((result) => {
		if (result.value) {
			if (result.value) {
				document.location.href = href;
			}
		}
	});
});

//
const flashData6 = $(".flash-data-info").data("flashdata");
if (flashData6) {
	Swal.fire({
		title: "Informasi Pendaftaran",
		text: "Berhasil " + flashData6,
		icon: "success",
	});
}

//Alert gagal cetak bukti daftar
$(".notif-cetak").on("click", function (e) {
	Swal.fire({
		title: "Gagal Mencetak",
		text: "Status pendaftaran anda belum di konfirmasi",
		icon: "warning",
	});
});

$(document).ready(function () {
	var current_fs, next_fs, previous_fs; //fieldsets
	var opacity;
	var current = 1;
	var steps = $("fieldset").length;

	setProgressBar(current);

	$(".next").click(function () {
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();

		//Add Class Active
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate(
			{ opacity: 0 },
			{
				step: function (now) {
					// for making fielset appear animation
					opacity = 1 - now;

					current_fs.css({
						display: "none",
						position: "relative",
					});
					next_fs.css({ opacity: opacity });
				},
				duration: 500,
			}
		);
		setProgressBar(++current);
	});

	$(".previous").click(function () {
		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();

		//Remove class active
		$("#progressbar li")
			.eq($("fieldset").index(current_fs))
			.removeClass("active");

		//show the previous fieldset
		previous_fs.show();

		//hide the current fieldset with style
		current_fs.animate(
			{ opacity: 0 },
			{
				step: function (now) {
					// for making fielset appear animation
					opacity = 1 - now;

					current_fs.css({
						display: "none",
						position: "relative",
					});
					previous_fs.css({ opacity: opacity });
				},
				duration: 500,
			}
		);
		setProgressBar(--current);
	});

	function setProgressBar(curStep) {
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar").css("width", percent + "%");
	}

	$(".submit").click(function () {
		return false;
	});
});

// konfirmasi pendaftaran
$(".tombol-kirim").on("click", function (e) {
	e.preventDefault();
	const submit = $(this).parent("form");
	Swal.fire({
		title: "Apakah Data Anda Sudah Benar ?",
		text: "Pilih Ya jika sudah yakin",
		icon: "warning",
		showCancelButton: false,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Ya",
		cancleButtonText: "Tidak",
	}).then((result) => {
		if (result.value) {
		}
	});
});

$(document).ready(function () {
	$("#container").simpleCalendar({
		fixedStartDay: 0, // begin weeks by sunday
		disableEmptyDetails: true,
		events: [
			// generate new event for the last two days
			{
				startDate: new Date(
					new Date().setHours(new Date().getHours() - 48)
				).toISOString(),
			},
		],
	});
});
