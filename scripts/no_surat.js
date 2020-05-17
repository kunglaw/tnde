// get no surat keluar
function getnsk()
{
	var p = "";
	
	var no_agenda = document.sk.no_agenda.value; // no agenda
	var pg = document.sk.pengirim.value; // pengirim
	var tgls = document.sk.tanggal_surat.value; // tanggal surat
	
	var tgl = new Array();
	tgl = tgls.split("-");
	var tempBulan = tgl[1];
	var tempTahun = tgl[0];
	
	var rB = ""; 
	
	if(tempBulan == 01)
	{
		rB = "I";
	}
	else if(tempBulan == 02)
	{
		rB = "II";
	}
	else if(tempBulan == 03)
	{
		rB = "III";
	}
	else if(tempBulan == 04)
	{
		rB = "IV";
	}
	else if(tempBulan == 05)
	{
		rB = "V";
	}
	else if(tempBulan == 06)
	{
		rB = "VI";
	}
	else if(tempBulan == 07)
	{
		rB = "VII";
	}
	else if(tempBulan == 08)
	{
		rB = "VIII";
	}
	else if(tempBulan == 09)
	{
		rB = "IX";
	}
	else if(tempBulan == 10)
	{
		rB = "X";
	}
	else if(tempBulan == 11)
	{
		rB = "XI";
	}
	else if(tempBulan == 12)
	{
		rB = "XI";
	}
	
	//================================================================================
	
	if(pg == "Surat Keluar Ketua")
	{
		p = no_agenda+"/KPU/"+rB+"/"+tempTahun;
	}
	else if(pg == "Surat Keluar Sekjen")
	{
		p = no_agenda+"/SJ/"+rB+"/"+tempTahun;
	}
	else if(pg == "Surat Sekjen")
	{
		p = no_agenda+"/KPIS/Sekjen/"+tempTahun;
	}
	else if(pg == "Surat Keluar Ketua")
	{
		p = no_agenda+"/KPIS/KPU/"+tempTahun;
	}
	else if(pg == "Undangan")
	{
		p = no_agenda+"/UND/"+rB+"/"+tempTahun;
	}		
	else if(pg == "Surat Tugas")
	{
		p = no_agenda+"/ST/"+rB+"/"+tempTahun;
	}		
	else if(pg == "Surat Perintah")
	{
		p = no_agenda+"/SP/"+rB+"/"+tempTahun;
	}
	else if(pg == "Surat Keputusan Bersama(MOU)")
	{
		p = no_agenda+"/KB/KPU/Tahun "+tempTahun;//+tempTahun;
	}
	else if(pg == "Surat Keluar Pengaturan")
	{
		p = no_agenda+" Tahun "+tempTahun;
	}
	else if(pg == "Berita Acara")
	{
		p = no_agenda+"/BA/"+rB+"/"+tempTahun;
	}
	
	document.sk.no_surat.value = p;
	
}

// get no surat Masuk
function getnsm()
{
	var p = "";
	
	var no_agenda = document.sm.no_agenda.value;
	var tj = document.sm.tujuan.value; // tujuan
	var tgls = document.sm.tanggal_surat.value;
	
	var tgl = new Array();
	tgl = tgls.split("-");
	var tempBulan = tgl[1];
	var tempTahun = tgl[0];
	
	var rB = ""; 
	
	if(tempBulan == 01)
	{
		rB = "I";
	}
	else if(tempBulan == 02)
	{
		rB = "II";
	}
	else if(tempBulan == 03)
	{
		rB = "III";
	}
	else if(tempBulan == 04)
	{
		rB = "IV";
	}
	else if(tempBulan == 05)
	{
		rB = "V";
	}
	else if(tempBulan == 06)
	{
		rB = "VI";
	}
	else if(tempBulan == 07)
	{
		rB = "VII";
	}
	else if(tempBulan == 08)
	{
		rB = "VIII";
	}
	else if(tempBulan == 09)
	{
		rB = "IX";
	}
	else if(tempBulan == 10)
	{
		rB = "X";
	}
	else if(tempBulan == 11)
	{
		rB = "XI";
	}
	else if(tempBulan == 12)
	{
		rB = "XI";
	}
	
	//================================================================================
	
	if(tj == "Umum(Ketua)")
	{
		p = no_agenda+"/M/V-K/"+tempTahun;
	}
	else if(tj == "Umum(sekjen)")
	{
		p = no_agenda+"/M/V-SJ/"+tempTahun;
	}
	else if(tj == "Perencanaan")
	{
		p = no_agenda+"/M/I/"+tempTahun;
	}
	else if(tj == "Teknis + Humas")
	{
		p = no_agenda+"/M/IX/"+tempTahun;
	}
	else if(tj == "Dislog")
	{
		p = no_agenda+"/M/VI/"+tempTahun;
	}		
	else if(tj == "Inspektorat")
	{
		p = no_agenda+"/M/VI/"+tempTahun;
	}		
	else if(tj == "Hukum")
	{
		p = no_agenda+"/M/II/"+tempTahun;
	}
	else if(tj == "Keuangan")
	{
		p = no_agenda+"/M/IV/"+tempTahun;//+tempTahun;
	}
	else if(tj == "SDM")
	{
		p = no_agenda+"/M/VIII/"+tempTahun;
	}
	
	document.sm.no_surat.value = p;
	
}

// JavaScript Document