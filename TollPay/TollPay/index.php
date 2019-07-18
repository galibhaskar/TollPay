<?php
  session_start();
  if(isset($_SESSION['username']))
  {
      header("location: main.php");
  }
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      .img5 
      {
          width: 500px;
          height: 200px;
          position: fixed;
          background-image: linear-gradient(rgb(0,0,0,0.8),rgb(0,0,0,0.2));
          text-align: right;
          top: 40%;
          left: 10%;
          color:white ;
          font-size: 40px;
          padding: 5%;
      }
      html 
      {
          height: 100%;
          position: relative;
          margin: 0;
          font-family: "Comic Sans MS", cursive, sans-serif;
      }
        
      .bg-text {

        background-color: rgba(0, 0, 0, 0.4); 
        color: white;
        font-weight: bold;
        font-size: 80px;
        border: 10px solid #f1f1f1;   
        position:relative;
        transform: translate(-50%, -50%);
      display: inline;   
        margin-left: auto;
        margin-right: auto;
        text-align: center;
      }
      
      .name{
        -webkit-animation: animation 2800ms linear infinite both;
        animation: animation 2800ms linear infinite both;
        position: fixed;
      }
        
      @-webkit-keyframes animation { 
        0% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 200, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
        3.07% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 204.086, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 204.086, 0, 0, 1); }
        3.43% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 213.758, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 213.758, 0, 0, 1); }
        4.58% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 234.461, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 234.461, 0, 0, 1); }
        4.61% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 234.91, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 234.91, 0, 0, 1); }
        6.15% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 246.995, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 246.995, 0, 0, 1); }
        6.86% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 249.393, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 249.393, 0, 0, 1); }
        9.15% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 251.443, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 251.443, 0, 0, 1); }
        10.12% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 251.304, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 251.304, 0, 0, 1); }
        14.09% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 250.331, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 250.331, 0, 0, 1); }
        22.02% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 249.999, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 249.999, 0, 0, 1); }
        23.45% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 249.998, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 249.998, 0, 0, 1); }
        28.47% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 250, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 250, 0, 0, 1); }
        28.57% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500, 0, 0, 1); }
        29.86% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 576.56, -15.312, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 576.56, -15.312, 0, 1); }
        29.99% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 580.887, -16.177, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 580.887, -16.177, 0, 1); }
        31.15% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 596.373, -19.275, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 596.373, -19.275, 0, 1); }
        32.75% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 578.029, -15.606, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 578.029, -15.606, 0, 1); }
        34.33% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 545.557, -9.111, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 545.557, -9.111, 0, 1); }
        35.71% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 520.289, -4.058, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 520.289, -4.058, 0, 1); }
        35.94% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 516.976, -3.395, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 516.976, -3.395, 0, 1); }
        37.51% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.066, -0.013, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.066, -0.013, 0, 1); }
        40.08% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 508.111, -1.622, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 508.111, -1.622, 0, 1); }
        46.45% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.011, -0.002, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.011, -0.002, 0, 1); }
        49.02% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.683, -0.137, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.683, -0.137, 0, 1); }
        55.38% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.001, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.001, 0, 0, 1); }
        57.96% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.057, -0.011, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.057, -0.011, 0, 1); }
        62.4% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.013, -0.003, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.013, -0.003, 0, 1); }
        62.5% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 750.012, -0.002, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 750.012, -0.002, 0, 1); }

        100% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 900, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 5500, 0, 0, 1); } 
      }
      
      @keyframes animation { 
        0% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 200, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
        3.07% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 204.086, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 204.086, 0, 0, 1); }
        3.43% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 213.758, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 213.758, 0, 0, 1); }
        4.58% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 234.461, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 234.461, 0, 0, 1); }
        4.61% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 234.91, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 234.91, 0, 0, 1); }
        6.15% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 246.995, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 246.995, 0, 0, 1); }
        6.86% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 249.393, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 249.393, 0, 0, 1); }
        9.15% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 251.443, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 251.443, 0, 0, 1); }
        10.12% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 251.304, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 251.304, 0, 0, 1); }
        14.09% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 250.331, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 250.331, 0, 0, 1); }
        22.02% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 249.999, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 249.999, 0, 0, 1); }
        23.45% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 249.998, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 249.998, 0, 0, 1); }
        28.47% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 250, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 250, 0, 0, 1); }
        28.57% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500, 0, 0, 1); }
        29.86% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 576.56, -15.312, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 576.56, -15.312, 0, 1); }
        29.99% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 580.887, -16.177, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 580.887, -16.177, 0, 1); }
        31.15% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 596.373, -19.275, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 596.373, -19.275, 0, 1); }
        32.75% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 578.029, -15.606, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 578.029, -15.606, 0, 1); }
        34.33% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 545.557, -9.111, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 545.557, -9.111, 0, 1); }
        35.71% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 520.289, -4.058, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 520.289, -4.058, 0, 1); }
        35.94% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 516.976, -3.395, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 516.976, -3.395, 0, 1); }
        37.51% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.066, -0.013, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.066, -0.013, 0, 1); }
        40.08% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 508.111, -1.622, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 508.111, -1.622, 0, 1); }
        46.45% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.011, -0.002, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.011, -0.002, 0, 1); }
        49.02% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.683, -0.137, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.683, -0.137, 0, 1); }
        55.38% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.001, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.001, 0, 0, 1); }
        57.96% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.057, -0.011, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.057, -0.011, 0, 1); }
        62.4% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.013, -0.003, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 500.013, -0.003, 0, 1); }
        62.5% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 750.012, -0.002, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 750.012, -0.002, 0, 1); }
        
        100% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 900, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 5500, 0, 0, 1); } 
      }
      hr { 
          display:grid;
          margin-top: 0.5em;
          margin-bottom: 0.5em;
          margin-left: auto;
          margin-right: auto;
          border-style: inset;
          border-width: 5px;
          top: 30%;
          position: relative  ;
      }
      .btn1 {
        border: 5px solid black;
        color: white;
        padding: 14px 28px;
        font-size: 20px;
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 69%;
        font-family: "Comic Sans MS", cursive, sans-serif;
        font-weight: bold;
        background-color: transparent;
      }

      .btn2 {
        border: 5px solid black;
        background-color: white;
        color: white;
        padding: 14px 28px;
        font-size: 16px;
        cursor: pointer;
        position: absolute;
        top: 70%;
        left: 70%;
        font-family: "Comic Sans MS", cursive, sans-serif;
        font-weight: bold;
        background-color: transparent;
      }
      
      /* Green */
      .REGISTER {
        border-color:rgba(245, 181, 7, 0.979);

      }
      
      .REGISTER:hover {
        background-color:rgba(245, 181, 7, 0.979);
        color: black;
      }
      
      /* Blue */
      .LOGIN {
        border-color:rgba(245, 181, 7, 0.979);
      }
      
      .LOGIN:hover {
        background: rgba(245, 181, 7, 0.979);
        color: black;
      }
      
      .buttons
      {
        text-align:left;
        font-family: "Comic Sans MS", cursive, sans-serif;
        font-weight: bold;
      }
      
      body
      {
        background-image: url("https://media.istockphoto.com/photos/asphalt-texture-detail-background-picture-id636906392?k=6&m=636906392&s=612x612&w=0&h=-wMuowPoO8BqsQgBPtwKSQMk6Swdri5_-kl5m0N8mz8=");
        height: 50%; 
        
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }

    .bg-image {
        /* Full height */
        height: 50%; 
        
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
  </head>
    <div>
      <div class="name">
          <div class="bg-text" >T</div>
          <div class="bg-text" >O</div>
          <div class="bg-text">L</div>
          <div class="bg-text">L</div>
          <div class="bg-text">P</div>
          <div class="bg-text">A</div>
          <div class="bg-text">Y</div>
      </div><br>
      </div>
    <hr>
  <body>
      <div class="buttons">
        <button class="btn1 REGISTER" onclick="location.href='Register.php'">REGISTER</button><br>
        <button class="btn2 LOGIN" onclick="location.href='main.php'">LOGIN</button>
        <h1 class="img5">-we are responsible for what you ride on</h1>
      </div>
      <br>
  </body>
</html>
