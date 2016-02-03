<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Homework PHP 1</title>
		<style>
		    #txt {
			color: purple;
		}
		#txt1 {
			color: blue;
		}
			.green {
				color:pink;
			}
			.red {
				color:orange;
			}
			table {
				border:solid 1px;
			}
			table td {
				border:solid 1px;
			}
		</style>
	</head>
	<body>
		<?php
$txt = "Area of Circle: π = π*d2/4:";
$txt1 = "Area of Trapezoid = (a+b)*h/2";

 echo "<p id = 'txt'>" .$txt . "</p> <p id='txt1'>" .$txt1 . "<p>";
$CircleDiam = 6;
			$CircArea = (3.14*$CircleDiam*$CircleDiam)/4;

			$trapSideA = 32;
			$trapSideB = 12;
			$trapH = 15;
			$trapArea = ($trapSideA+$trapSideB)*$trapH/2;

		echo "<table>
					<tr>
						<td colspan='2'><b>Table with colored results</b></td>
					</tr>
					<tr>
						<td>Parameters</td>
						<td>Result</td>
					</tr>
					<tr>
						<td><p class='green'>Circle diameter 'd': $CircleDiam sm.</p></td>
						<td><p class='red'> $CircArea sm<sup>2</sup> </p></td>
					</tr>
				<tr>
						<td><p class='green'>Trapezoid side 'a': $trapSideA sm.</p>
						<p class='green'>Trapezoid sides 'b': $trapSideB sm.</p>
						<p class='green'>Trapezoid height 'h': $trapH sm.</p>
						</td>
						<td><p class='red'> $trapArea sm<sup>2</sup> </p></td>
					</tr>
				  </table>";