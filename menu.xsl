<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>

    <!-- Google Fonts  -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet"/> -->
    <!-- required link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"/>
  <style type="text/css">
      body {
              display: flex;
              justify-content: center;
              align-items: center;
              background-color: #FEE2E2;
              <!-- background: url('assests/img/img1.jpg'); -->
              <!-- background-size: cover; -->
              font-family: Arial;
              
            }
        .btn {
             padding:15px 25px;
             position: absolute;
             width: 300px;
             margin-top:570px;
             
        }
        
        .btn span {
             cursor: pointer;
             display: inline-block;
             position: relative;
             transition: 0.5s;
          }

        .btn span:after {
             content: '\00bb';
             position: absolute;
             opacity: 0;
             top: 0;
             right: -20px;
             transition: 0.5s;
          }

        .btn:hover span {
             padding-right: 25px;
          }

        .btn:hover span:after {
             opacity: 1;
             right: 0;
          }
  </style>
  </head>
  <body>
  <!-- <h2>FOOD MENU</h2> -->
  <table border="3">
    <tr bgcolor="tomato">
      <th>Food_Name</th>
      <th>Type</th>
	  <th>Price</th>
    </tr>
    <xsl:for-each select="CATALOG/CD">
    <tr>
      <td><xsl:value-of select="Food_Name"/></td> 
      <td><xsl:value-of select="Type"/></td>
	  <td><xsl:value-of select="Price"/></td>
    </tr>
    </xsl:for-each>
  </table>
  <button onclick="location.href='order.html'" class="btn btn-danger"><span>Explore More!</span></button>
  
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>