<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <head>
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
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>