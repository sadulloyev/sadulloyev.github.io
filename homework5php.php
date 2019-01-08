<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HomeWorkPHP</title>
</head>
<body>
	
		<?php
		echo "<table border=1>";
          echo "<tr>";
          echo "<th>".'#'."</th>";
          echo "<th>".'C'."<sub>".'1'."</sub>".'='.'G'."<sub>".'r'."</sub>".'/'.'G'."<sub>".'m'."</sub>"."</th>";
           echo "<th>".'X'."<sub>".'iu'."</sub>"."</th>";
           echo "<th>".'Y'."<sub>".'o'."</sub>"."</th>";
           echo "<th>".'Y'."<sub>".'p'."</sub>"."</th>";
           echo "<th>".'u'."</th>";
           echo "<th>".'u'."<sup>".'2'."</sup>"."</th>";
           echo "</tr>";
           echo "<tr>";
           echo "<td>".'1'."</td>";
           echo "<td>".'1,5'."</td>";
           echo "<td>".'-3'."</td>";
           echo "<td>".'5,7'."</td>";
           echo "<td>".'5,64'."</td>";
           echo "<td>".'0,06'."</td>";
           echo "<td>".'0,0036'."</td>";
            echo "</tr>";
            echo "<tr>";
           echo "<td>".'2'."</td>";
           echo "<td>".'1,6'."</td>";
           echo "<td>".'-2'."</td>";
           echo "<td>".'4,6'."</td>";
           echo "<td>".'4,6'."</td>";
           echo "<td>".'0'."</td>";
           echo "<td>".'0'."</td>";
            echo "</tr>";
            echo "<tr>";
           echo "<td>".'3'."</td>";
           echo "<td>".'1,7'."</td>";
           echo "<td>".'-1'."</td>";
           echo "<td>".'3,8'."</td>";
           echo "<td>".'3,805'."</td>";
           echo "<td>".'-0,005'."</td>";
           echo "<td>".'0,00025'."</td>";
            echo "</tr>";
            echo "<tr>";
           echo "<td>".'4'."</td>";
           echo "<td>".'1,8'."</td>";
           echo "<td>".'0'."</td>";
           echo "<td>".'3,1'."</td>";
           echo "<td>".'3,25'."</td>";
           echo "<td>".'-0,15'."</td>";
           echo "<td>".'0,0225'."</td>";
            echo "</tr>";
            echo "<tr>";
           echo "<td>".'5'."</td>";
           echo "<td>".'1,9'."</td>";
           echo "<td>".'1'."</td>";
           echo "<td>".'3,05'."</td>";
           echo "<td>".'2,94'."</td>";
           echo "<td>".'0,11'."</td>";
           echo "<td>".'0,00121'."</td>";
            echo "</tr>";
            echo "<tr>";
           echo "<td>".'6'."</td>";
           echo "<td>".'2,0'."</td>";
           echo "<td>".'2'."</td>";
           echo "<td>".'3,0'."</td>";
           echo "<td>".'2,86'."</td>";
           echo "<td>".'0,14'."</td>";
           echo "<td>".'0,0196'."</td>";
            echo "</tr>";
            echo "<tr>";
           echo "<td>".'7'."</td>";
           echo "<td>".'2,1'."</td>";
           echo "<td>".'3'."</td>";
           echo "<td>".'2,92'."</td>";
           echo "<td>".'3,03'."</td>";
           echo "<td>".'-0,11'."</td>";
           echo "<td>".'0,0121'."</td>";
            echo "</tr>";
           echo "</table>";
		?>
		<h1><strong>Hisoblashlar!</strong></h1>
		<br>
		<?php
          echo "<strong>".'C1=Gr/Gm'."</strong>".' '. "ustuni bo'yicha yig'indi:12.6";
         if (1.5<1.6) {
           $A=1.6;
         } else 
         {
           $A=1.5;
         }
         if ($A<1.7) {
           $A=1.7;
         } else {
           $A=$A;
         }
         if ($A<1.8) {
           $A=1.8;
         } else {
           $A=$A;
         }
         if ($A<1.9) {
           $A=1.9;
         } else {
           $A=$A;
         }
         if ($A<2.0) {
           $A=2.0;
         } else {
           $A=$A;
         }
         if ($A<2.1) {
           $A=2.1;
         } else {
           $A=$A;
         }
         
         echo "<br>";
        echo "<strong>".'C1=Gr/Gm'."</strong>".' '.'ustuni maksimal qiymati:'."$A";
          

          if (1.5>1.6) {
           $B=1.6;
         } else 
         {
           $B=1.5;
         }
         if ($B>1.7) {
           $B=1.7;
         } else {
           $B=$B;
         }
         if ($B>1.8) {
           $B=1.8;
         } else {
           $B=$B;
         }
         if ($B>1.9) {
           $B=1.9;
         } else {
           $B=$B;
         }
         if ($B>2.0) {
           $B=2.0;
         } else {
           $B=$B;
         }
         if ($B>2.1) {
           $B=2.1;
         } else {
           $B=$B;
         }
         echo "<br>";
        echo "<strong>".'C1=Gr/Gm'."</strong>".' '.'ustuni minimal qiymati:'."$B";
               echo "<br>";
        echo "<strong>".'C1=Gr/Gm'."</strong>".' '. 'ustuni o\'rtacha qiymati:'."1.8";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        if (-3<-2) {
           $A1=-2;
         } else 
         {
           $A1=-3;
         }
         if ($A1<-1) {
           $A1=-1;
         } else {
           $A1=$A1;
         }
         if ($A1<0) {
           $A1=0;
         } else {
           $A1=$A1;
         }
         if ($A1<1) {
           $A1=1;
         } else {
           $A1=$A1;
         }
         if ($A1<2) {
           $A1=2;
         } else {
           $A1=$A1;
         }
         if ($A1<3) {
           $A1=3;
         } else {
           $A1=$A1;
         }
         echo "<strong>".'Xiu'."</strong>".' '. "ustuni bo'yicha yig'indi:0";
         echo "<br>";
         echo "<strong>".'Xiu'."</strong>".' '.'ustuni maksimal qiymati:'."$A1";
           if (-3>-2) {
           $B1=-2;
         } else 
         {
           $B1=-3;
         }
         if ($B1>-1) {
           $B1=-1;
         } else {
           $B1=$B1;
         }
         if ($B1>0) {
           $B1=0;
         } else {
           $B1=$B1;
         }
         if ($B1>1) {
           $B1=1;
         } else {
           $B1=$B1;
         }
         if ($B1>2) {
           $B1=2;
         } else {
           $B1=$B1;
         }
         if ($B1>3) {
           $B1=3;
         } else {
           $B1=$B1;
         }
         echo "<br>";
        echo "<strong>".'Xiu'."</strong>".' '.'ustuni minimal qiymati:'."$B1";
               echo "<br>";
        echo "<strong>".'Xiu'."</strong>".' '. 'ustuni o\'rtacha qiymati:'."0";
        echo "<br>";
        echo "<br>";
        echo "<br>";
                   echo "<strong>".'Yo'."</strong>".' '. "ustuni bo'yicha yig'indi:26.17";
         if (4.6<5.7) {
           $A2=5.7;
         } else 
         {
           $A2=4.6;
         }
         if ($A2<3.8) {
           $A2=3.8;
         } else {
           $A2=$A2;
         }
         if ($A2<3.1) {
           $A2=3.1;
         } else {
           $A2=$A2;
         }
         if ($A2<3.05) {
           $A2=3.05;
         } else {
           $A2=$A2;
         }
         if ($A2<3) {
           $A2=3;
         } else {
           $A2=$A2;
         }
         if ($A2<2.92) {
           $A2=2.92;
         } else {
           $A2=$A2;
         }
         
         echo "<br>";
        echo "<strong>".'Yo'."</strong>".' '.'ustuni maksimal qiymati:'."$A2";

            if (4.6>5.7) {
           $B2=5.7;
         } else 
         {
           $B2=4.6;
         }
         if ($B2>3.8) {
           $B2=3.8;
         } else {
           $B2=$B2;
         }
         if ($B2>3.1) {
           $B2=3.1;
         } else {
           $B2=$B2;
         }
         if ($B2>3.05) {
           $B2=3.05;
         } else {
           $B2=$B2;
         }
         if ($B2>3) {
           $B2=3;
         } else {
           $B2=$B2;
         }
         if ($B2>2.92) {
           $B2=2.92;
         } else {
           $B2=$B2;
         }
         echo "<br>";
        echo "<strong>".'Yo'."</strong>".' '.'ustuni minimal qiymati:'."$B2";
               echo "<br>";
        echo "<strong>".'Yo'."</strong>".' '. 'ustuni o\'rtacha qiymati:'."0";
        echo "<br>";
        echo "<br>";
        echo "<br>";
                echo "<strong>".'Yp'."</strong>".' '. "ustuni bo'yicha yig'indi:26.125";
         if (4.6<5.64) {
           $A3=5.64;
         } else 
         {
           $A3=4.6;
         }
         if ($A3<3.805) {
           $A3=3.805;
         } else {
           $A3=$A3;
         }
         if ($A3<3.25) {
           $A3=3.25;
         } else {
           $A3=$A3;
         }
         if ($A3<2.94) {
           $A3=2.94;
         } else {
           $A3=$A3;
         }
         if ($A3<2.86) {
           $A3=2.86;
         } else {
           $A3=$A3;
         }
         if ($A3<3.03) {
           $A3=3.03;
         } else {
           $A3=$A3;
         }
         
         echo "<br>";
        echo "<strong>".'Yp'."</strong>".' '.'ustuni maksimal qiymati:'."$A3";

              if (4.6>5.64) {
           $B3=5.64;
         } else 
         {
           $B3=4.6;
         }
         if ($B3>3.805) {
           $B3=3.805;
         } else {
           $B3=$B3;
         }
         if ($B3>3.25) {
           $B3=3.25;
         } else {
           $B3=$B3;
         }
         if ($B3>2.94) {
           $B3=2.94;
         } else {
           $B3=$B3;
         }
         if ($B3>2.86) {
           $B3=2.86;
         } else {
           $B3=$B3;
         }
         if ($B3>3.03) {
           $B3=3.03;
         } else {
           $B3=$B3;
         }
         echo "<br>";
        echo "<strong>".'Yp'."</strong>".' '.'ustuni minimal qiymati:'."$B3";
               echo "<br>";
        echo "<strong>".'Yp'."</strong>".' '. 'ustuni o\'rtacha qiymati:'."3.7385714285714";
        echo "<br>";
        echo "<br>";
        echo "<br>";


              echo "<strong>".'u'."</strong>".' '. "ustuni bo'yicha yig'indi:0.045";
         if (0<0.06) {
           $A4=0.06;
         } else 
         {
           $A4=0;
         }
         if ($A4<-0.005) {
           $A4=-0.005;
         } else {
           $A4=$A4;
         }
         if ($A4<-0.15) {
           $A4=-0.15;
         } else {
           $A4=$A4;
         }
         if ($A4<0.11) {
           $A4=0.11;
         } else {
           $A4=$A4;
         }
         if ($A4<0.14) {
           $A4=0.14;
         } else {
           $A4=$A4;
         }
         if ($A4<0.045) 
         {
           $A4=0.045;
         } else {
           $A4=$A4;
         }
         
         echo "<br>";
        echo "<strong>".'u'."</strong>".' '.'ustuni maksimal qiymati:'."$A4";
             

                if (0>0.06) {
           $B4=0.06;
         } else 
         {
           $B4=0;
         }
         if ($B4>-0.005) {
           $B4=-0.005;
         } else {
           $B4=$B4;
         }
         if ($B4>-0.15) {
           $B4=-0.15;
         } else {
           $B4=$B4;
         }
         if ($B4>0.11) {
           $B4=0.11;
         } else {
           $B4=$B4;
         }
         if ($B4>0.14) {
           $B4=0.14;
         } else {
           $B4=$B4;
         }
         if ($B4>0.045) {
           $B4=0.045;
         } else {
           $B4=$B4;
         }
         echo "<br>";
        echo "<strong>".'u'."</strong>".' '.'ustuni minimal qiymati:'."$B4";
               echo "<br>";
        echo "<strong>".'u'."</strong>".' '. 'ustuni o\'rtacha qiymati:'."3.732142857129";
        echo "<br>";
        echo "<br>";
                        

                        echo "<strong>".'u^2'."</strong>".' '. "ustuni bo'yicha yig'indi:0.07015";
         if (0<0.0036) {
           $A5=0.0036;
         } else 
         {
           $A5=0;
         }
         if ($A5<0.00025) {
           $A5=0.00025;
         } else {
           $A5=$A5;
         }
         if ($A5<0.0225) {
           $A5=0.0225;
         } else {
           $A5=$A5;
         }
         if ($A5<0.0121) {
           $A5=0.0121;
         } else {
           $A5=$A5;
         }
         if ($A5<0.0196) {
           $A5=0.0196;
         } else {
           $A5=$A5;
         }
         if ($A5<0.0121) 
         {
           $A5=0.0121;
         } else {
           $A5=$A5;
         }
         
         echo "<br>";
        echo "<strong>".'u^2'."</strong>".' '.'ustuni maksimal qiymati:'."$A5";



               if (0>0.0036) {
           $B5=0.0036;
         } else 
         {
           $B5=0;
         }
         if ($B5>0.00025) {
           $B5=0.00025;
         } else {
           $B5=$B5;
         }
         if ($B5>0.225) {
           $B5=0.225;
         } else {
           $B5=$B5;
         }
         if ($B5>0.121) {
           $B5=0.121;
         } else {
           $B5=$B5;
         }
         if ($B5>0.0196) {
           $B5=0.0196;
         } else {
           $B5=$B5;
         }
         if ($B5>0.0121) {
           $B5=0.0121;
         } else {
           $B5=$B5;
         }
         echo "<br>";
        echo "<strong>".'u^2'."</strong>".' '.'ustuni minimal qiymati:'."$B5";
               echo "<br>";
        echo "<strong>".'u^2'."</strong>".' '. 'ustuni o\'rtacha qiymati:'."0.010021428571329";
        
             echo "<br>";
             echo "<br>";
             ?>
             <h1><strong>Kengaytirilgan jadval !</strong></h1>
             <?php
                                      echo "<table border=1>";
          echo "<tr>";
          echo "<th>".'#'."</th>";
          echo "<th>".'C'."<sub>".'1'."</sub>".'='.'G'."<sub>".'r'."</sub>".'/'.'G'."<sub>".'m'."</sub>"."</th>";
           echo "<th>".'X'."<sub>".'iu'."</sub>"."</th>";
           echo "<th>".'Y'."<sub>".'o'."</sub>"."</th>";
           echo "<th>".'Y'."<sub>".'p'."</sub>"."</th>";
           echo "<th>".'u'."</th>";
           echo "<th>".'u'."<sup>".'2'."</sup>"."</th>";
           echo "</tr>";
           echo "<tr>";
           echo "<td>".'1'."</td>";
           echo "<td>".'1,5'."</td>";
           echo "<td>".'-3'."</td>";
           echo "<td>".'5,7'."</td>";
           echo "<td>".'5,64'."</td>";
           echo "<td>".'0,06'."</td>";
           echo "<td>".'0,0036'."</td>";
           

            echo "</tr>";
            echo "<tr>";
           echo "<td>".'2'."</td>";
           echo "<td>".'1,6'."</td>";
           echo "<td>".'-2'."</td>";
           echo "<td>".'4,6'."</td>";
           echo "<td>".'4,6'."</td>";
           echo "<td>".'0'."</td>";
           echo "<td>".'0'."</td>";
            echo "</tr>";
            echo "<tr>";
           echo "<td>".'3'."</td>";
           echo "<td>".'1,7'."</td>";
           echo "<td>".'-1'."</td>";
           echo "<td>".'3,8'."</td>";
           echo "<td>".'3,805'."</td>";
           echo "<td>".'-0,005'."</td>";
           echo "<td>".'0,00025'."</td>";
            echo "</tr>";
            echo "<tr>";
           echo "<td>".'4'."</td>";
           echo "<td>".'1,8'."</td>";
           echo "<td>".'0'."</td>";
           echo "<td>".'3,1'."</td>";
           echo "<td>".'3,25'."</td>";
           echo "<td>".'-0,15'."</td>";
           echo "<td>".'0,0225'."</td>";
            echo "</tr>";
            echo "<tr>";
           echo "<td>".'5'."</td>";
           echo "<td>".'1,9'."</td>";
           echo "<td>".'1'."</td>";
           echo "<td>".'3,05'."</td>";
           echo "<td>".'2,94'."</td>";
           echo "<td>".'0,11'."</td>";
           echo "<td>".'0,00121'."</td>";
            echo "</tr>";
            echo "<tr>";
           echo "<td>".'6'."</td>";
           echo "<td>".'2,0'."</td>";
           echo "<td>".'2'."</td>";
           echo "<td>".'3,0'."</td>";
           echo "<td>".'2,86'."</td>";
           echo "<td>".'0,14'."</td>";
           echo "<td>".'0,0196'."</td>";
            echo "</tr>";
            echo "<tr>";
           echo "<td>".'7'."</td>";
           echo "<td>".'2,1'."</td>";
           echo "<td>".'3'."</td>";
           echo "<td>".'2,92'."</td>";
           echo "<td>".'3,03'."</td>";
           echo "<td>".'-0,11'."</td>";
           echo "<td>".'0,0121'."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>".'summa'."</td>";
            echo "<td>".'12.6'."</td>";
            echo "<td>".'0'."</td>";
            echo "<td>".'26.17'."</td>";
            echo "<td>".'26.125'."</td>";
            echo "<td>".'0.045'."</td>";
            echo "<td>".'0.07015'."</td>";
            echo "</tr>";
              echo "<tr>";
            echo "<td>".'Avg'."</td>";
            echo "<td>".'1.8'."</td>";
            echo "<td>".'0'."</td>";
            echo "<td>".'3.7385714285714'."</td>";
            echo "<td>".'3.7321428571429'."</td>";
            echo "<td>".'0.0064285714285714'."</td>";
            echo "<td>".'0.010021428571429'."</td>";
            echo "</tr>";
              echo "<tr>";
            echo "<td>".'Max'."</td>";
            echo "<td>".'2.1'."</td>";
            echo "<td>".'3'."</td>";
            echo "<td>".'5.7'."</td>";
            echo "<td>".'5.64'."</td>";
            echo "<td>".'0.14'."</td>";
            echo "<td>".'0.0225'."</td>";
            echo "</tr>";
              echo "<tr>";
            echo "<td>".'Min'."</td>";
            echo "<td>".'1.5'."</td>";
            echo "<td>".'-3'."</td>";
            echo "<td>".'2.92'."</td>";
            echo "<td>".'2.86'."</td>";
            echo "<td>".'-0.15'."</td>";
            echo "<td>".'0'."</td>";
            echo "</tr>";
            

           echo "</table>";



        ?>
</body>
</html>