<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#loading {
   width: 100%;
   height: 100%;
   top: 0;
   left: 0;
   position: fixed;
   display: block;
   opacity: 0.7;
   background-color: #fff;
   z-index: 99;
   text-align: center;
}

#loading-image {
  position: absolute;
  top: 100px;
  left: 240px;
  z-index: 100;
}
	</style>
</head>
<body>


<div id="loading">
  <img id="loading-image" src="loader.gif" alt="Loading..." />
</div>

<img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh041gYqcKjISXJY3Vbz35_7083RnhW0CuGWSEghH5HdqQ9pnFPw" />
<img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX45YrJJhFvLWXll-mT-uL5SldHytNAMvib2X58GR_FJ9uuBOd" />
<img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTz73jU5YXWSz_oL5URjfo7LdJXgP_EanrQwXMypRE-jOxHZxbq" />

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

  <script language="javascript" type="text/javascript">
     $(window).load(function() {
     $('#loading').hide();
  });
</script>
</body>
</html>