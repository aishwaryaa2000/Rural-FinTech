<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>QUIZ</title>
      <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Document
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  
  <link rel="canonical" href="https://www.creative-tim.com/product/material-kit" />
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  
  <link href="assets/css/material-kit.mine45f.css?v=2.0.6" rel="stylesheet" />
 
                <link rel="stylesheet" type="text/css" href="./css/style.css" />
                <link href="assets/demo/demo.css" rel="stylesheet" />
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<center>
<br>
<br>
<br>
<br>
<div class="card" style="width:40%;">
          <div class="card-header card-header-text card-header-primary">
            <div class="card-text">
              <h4 class="card-title">Time deposit calculator</h4>
            </div>
          </div>
          <div class="card-body">
          <form name=mvc>
                <div id=tdr>
                    <table class="table bordered">
                        <col class=w50>
                        <col class=w50>
                        <tr>
                            <td>Principal
                            <td><input id=principal>
                        <tr>
                            <td>Interest Rate
                            <td><input id=rate>
                        <tr>
                            <td>Interest Compounding
                            <td><select id=ci>
                                    <option value=12>Monthly
                                    <option value=4 selected>Quarterly
                                    <option value=2>Half-yearly
                                    <option value=1>Yearly
                                </select>
                        <tr>
                            <td>Period (months)
                            <td><input id=time>
                        <tr>
                            <td><button type=reset>Reset</button>
                            <td><button type=button onclick=maturity();>Submit</button>
                        <tr>
                            <td>Maturity Value
                            <td><input id=mv>
                    </table>
                </div>
            </form>
        
</div>
</center>
</body>
<script>function maturity(){var principal=document.getElementById('principal').value;var rate=document.getElementById('rate').value;var ci=document.getElementById('ci').value;var time=document.getElementById('time').value;var irate=rate/ci;var mv=document.getElementById('mv').value;
document.getElementById('mv').value=(document.getElementById('principal').value*Math.pow((1 + irate/100),(time/12*ci))).toFixed(2);}
</script>
          </div>
      </div>
</div>



<!-- 
<div class="d-flex justify-content-center">
<div id=outer>Time Deposit Calculator<div id=cover>
            <form name=mvc>
                <div id=tdr>
                    <table class="table bordered">
                        <col class=w50>
                        <col class=w50>
                        <tr>
                            <td>Principal
                            <td><input id=principal>
                        <tr>
                            <td>Interest Rate
                            <td><input id=rate>
                        <tr>
                            <td>Interest Compounding
                            <td><select id=ci>
                                    <option value=12>Monthly
                                    <option value=4 selected>Quarterly
                                    <option value=2>Half-yearly
                                    <option value=1>Yearly
                                </select>
                        <tr>
                            <td>Period (months)
                            <td><input id=time>
                        <tr>
                            <td><button type=reset>Reset</button>
                            <td><button type=button onclick=maturity();>Submit</button>
                        <tr>
                            <td>Maturity Value
                            <td><input id=mv>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script>function maturity(){var principal=document.getElementById('principal').value;var rate=document.getElementById('rate').value;var ci=document.getElementById('ci').value;var time=document.getElementById('time').value;var irate=rate/ci;var mv=document.getElementById('mv').value;
document.getElementById('mv').value=(document.getElementById('principal').value*Math.pow((1 + irate/100),(time/12*ci))).toFixed(2);}
</script> -->
</html>