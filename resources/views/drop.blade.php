<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="#home">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Categories
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="products/Takım">Takım</a>
      <a href="products/Şal">Şal</a>
      <a href="products/Çanta">Çanta</a>
      <a href="products/Doğal ve Rahat">Doğal ve Rahat</a>
      <a href="products/Topuz Tokası">Topuz Tokası</a>
      <a href="products/Elbise">Elbise</a>
      <a href="products/Polyester">Polyester</a>
      <a href="products/Sweatshirt">Sweatshirt</a>
      <a href="products/Takı">Takı</a>
      <a href="products/Dış Giyim">Dış Giyim</a>
      <a href="products/Başörtüsü">Başörtüsü</a>
      <a href="products/Kemer">Kemer</a>
      <a href="products/Pamuk Polyester">Pamuk Polyester</a>
      <a href="products/Bileklik">Bileklik</a>
      <a href="products/Eşofman">Eşofman</a>
      <a href="products/Trençkot - Kap">Trençkot - Kap</a>
      <a href="products/Pantolon">Pantolon</a>
      <a href="products/Eşofman Takım">Eşofman Takım</a>
      <a href="products/Boyunluk - Kolluk - Eldiven">Boyunluk - Kolluk - Eldiven</a>
      <a href="products/Bone">Bone</a>
      <a href="products/Hırka">Hırka</a>
      <a href="products/Triko">Triko</a>
      <a href="products/Panço">Panço</a>
      <a href="products/Abiye">Abiye</a>
      <a href="products/Penye">Penye</a>
      <a href="products/Şal-Eşarp Modelleri">Şal-Eşarp Modelleri</a>
      <a href="products/Denim">Denim</a>
      <a href="products/Mıknatıs Çıt Çıt">Mıknatıs Çıt Çıt</a>
      <a href="products/Gözlük">Gözlük</a>
      <a href="products/Ferace">Ferace</a>
      <a href="products/Üst Giyim">Üst Giyim</a>
      <a href="products/Takımlar">Takımlar</a>
      <a href="products/Tunik">Tunik</a>
      <a href="products/Gömlek">Gömlek</a>
      <a href="products/Alt Giyim">Alt Giyim</a>
      <a href="products/Other">Other</a>
      <a href="products/takim">Takim</a>
      <a href="products/Giyim">Giyim</a>
      <a href="products/Etek">Etek</a>
    </div>
  </div>
</div>

@yield('content')

</body>
</html>
