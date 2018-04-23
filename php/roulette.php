<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>HTML5-roulette</title>
  <meta name="description" content="HTML5-roulette">
  <meta name="author" content="jeex.eu">

  <style>
    html{
      background: silver;
    }
    body{
      width: 400px;
      min-height: 200px;
      margin: 20px auto;
      background: white;
      border-radius: 5px;
    }
    form, div{
      padding: 10px;
    }
    p{
      margin: 5px 0px;
    }
  </style>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <form action="" method="post">
    <p><input type="text" name="naam" value="" placeholder="Naam" required /></p>
    <p><input type="email" name="email" value="" placeholder="Emailadres" required /></p>
    <p>
      <select name="fiche" required >
                        <option value=""></option>
        <option value="0"  selected="selected"  >0</option><option value="1"  >1</option><option value="2"  >2</option><option value="3"  >3</option><option value="4"  >4</option><option value="5"  >5</option><option value="6"  >6</option><option value="7"  >7</option><option value="8"  >8</option><option value="9"  >9</option><option value="10"  >10</option><option value="11"  >11</option><option value="12"  >12</option><option value="13"  >13</option><option value="14"  >14</option><option value="15"  >15</option><option value="16"  >16</option><option value="17"  >17</option><option value="18"  >18</option><option value="19"  >19</option><option value="20"  >20</option><option value="21"  >21</option><option value="22"  >22</option><option value="23"  >23</option><option value="24"  >24</option><option value="25"  >25</option><option value="26"  >26</option><option value="27"  >27</option><option value="28"  >28</option><option value="29"  >29</option><option value="30"  >30</option><option value="31"  >31</option><option value="32"  >32</option><option value="33"  >33</option><option value="34"  >34</option><option value="35"  >35</option><option value="36"  >36</option>        <option value="rood"  >ROOD</option>
        <option value="groen"  >GROEN</option>
      </select>
    </p>
    <p><input type="submit" name="verzenden" value="Verzenden" /></p>
  </form>

</body>
</html>
