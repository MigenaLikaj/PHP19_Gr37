<!DOCTYPE html>
<html manifest="demo_html.appcache">
<head>
<link rel="stylesheet" type="text/css" href="index.css">
<title> Lexo Liber </title>
<style>
#libra {
    margin-top: 10px;
    padding-left:30px;
    }
.carousel {
  padding: 20px;
  -webkit-perspective: 500px;
          perspective: 500px;
  overflow: hidden;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.carousel > * {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
}
.carousel figure {
  margin: 0;
  width: 400px;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
  -webkit-transform-origin: 50% 50% -482.8427124746px;
          transform-origin: 50% 50% -482.8427124746px;
}
