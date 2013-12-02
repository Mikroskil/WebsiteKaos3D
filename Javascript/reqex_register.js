// JavaScript Document

function validasi()
{
	var frm = document.forms["daftar"];
 	if(frm.gender[0].checked==false && frm.gender[1].checked==false)
	{
		alert("Title harus dipilih.");
		return false;
	}		
	else if(frm.firstname.value=="")
	{
		alert("FirstName harus diisi");
		return false;
	}
	
	else if(frm.firstname.value.search(/[a-zA-Z]/)<0)
	{
		alert("FirstName Tidak Valid");
		return false;
	}
	
	else if(frm.lastname.value=="")
	{
		alert("LastName harus diisi");
		return false;
	}
	
	else if(frm.lastname.value.search(/[a-zA-Z]/)<0)
	{
		alert("LastName Tidak Valid");
		return false;
	}
	
	else if(frm.email.value=="")
	{
		alert("Email harus diisi");
		return false;
	}
	else if(frm.email.value.search(/[a-zA-Z0-9]@[a-zA-Z0-9].[a-zA-Z0-9]/)<0)
	{
		alert("Email tidak valid.");
		return false;
	}
	
	if(frm.username.value=="")
	{
		alert("UserName harus diisi");
		return false;
	}
	else if(frm.passwd1.value=="")
	{
		alert("Password harus diisi");
		return false;
	}
	
	else if(frm.passwd2.value=="")
	{
		alert("Confirm Password harus diisi");
		return false;
	}
	
	else if(frm.passwd1.value!=frm.passwd2.value)
	{
		alert("Password Harus Sama");
		return false;
	}
		
	else if(frm.days.value=="-" || frm.months.value=="-" || frm.years.value=="-")
	{
		alert("Tanggal Lahir Harus Di Isi");
		return false;
	}	
	
	else if(frm.address.value=="")
	{
		alert("Alamat harus di isi");
		return false;
	}
	
	else if(frm.address.value.search(/[a-zA-Z0-9 ]/)<0)
	{
		alert("Alamat Tidak Valid");
		return false;
	}
	
	else if(frm.country.value=="")
	{
		alert("Nama Provinsi Belum di isi");
		return false;
	}
	
	else if(frm.country.value.search(/[a-zA-Z]/)<0)
	{
		alert("Nama Provinsi Tidak Valid");
		return false;
	}
	
	else if(frm.city.value=="")
	{
		alert("Nama Kota Belum di isi");
		return false;
	}
		
	else if(frm.city.value.search(/[a-zA-Z]/)<0)
	{
		alert("Nama Kota Tidak Valid");
		return false;
	}
	
	else if(frm.postcode.value=="")
	{
		alert("Kode Pos Belum di isi");
		return false;
	}	
	
	else if(frm.postcode.value.search(/[0-9]{5}/)<0)
	{
		alert("Kode Pos Tidak Valid");
		return false;
	}		
	else
		return true;
}
