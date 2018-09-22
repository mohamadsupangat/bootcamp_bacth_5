## Mohamad Supangat
#### Jl. Kasegeran Rt9/2, Desa. Kasegeran, Kec. Cilongok, Kab. Banyumas 

1. ```<?php
// bmembuat function biodata
function biodata($name="",$address="",$hobbies="",$is_married="",$school="",$skill="")
{
	$data['name']=$name;
	$data['address']=$address;
	$data['hobbies']=explode(',', $hobbies);
	if ($is_married=="Sudah") {
		$data['is_married']=true;
	} else {
		$data['is_married']=false;
	}
	$data['school']=array('highSchool' => substr($school, 0,3), 'university' => $school );
	$data['skill']=explode(",", $skill,-1);
	return json_encode($data);
}


// input biodata saya
$nama="Mohamad Supangat";
$alamat="Jl. Kasegeran Rt9/2, Desa. Kasegeran, Kec. Cilongok, Kab. Banyumas";
$hobi="Belajar IT, Bermain Gitar, Belajar tentang Linux";
$menikah="Belum";
$sekolah="SMK Ma'arif NU 1 Ajibarang";
$skill="html, css, javascript, jquery, php, mysql, codeigniter";


// eksekusi fungsi biodata
printf(biodata($nama,$alamat,$hobi,$menikah,$sekolah,$skill));

?>
```
2. 
