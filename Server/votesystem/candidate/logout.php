<?php
session_start();
session_destroy();

header('location: http://localhost/SEVCS_II/Server/votesystem/candidate/');
// echo "<script>

// 			 setTimeout(function () {

// 	   window.open('http://localhost:3000', '_parent');


// 	},1);
// 			   </script>

// 	";
