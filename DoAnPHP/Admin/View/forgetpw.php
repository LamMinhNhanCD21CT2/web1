<style>
  .container-forgetpw{
    margin: 50px 0px 0px 370px;
    width: 500px;
    height: 200px;
    border: 1px solid black;
  }
  label{
    margin-left:20px;
  }
  .email-forget{
    margin: 30px 0px 30px 50px;
    width:300px;
    height:40px;
  }
  .button-forget{
    margin-left:200px;
    border:1px solid white;
    background:aqua;
    color:white;
    width:90px;
    height:30px;
    border-radius:5px;
  }
  .title-forget{
    text-align:center;
  }
</style>
<div class="container-forgetpw">
    <form action="index.php?action=forgetpw&act=forgetpw_action" method="post">

    <h3 class="title-forget"> FORGET PASSWORD </h3>

    <label for="">EMAIL</label>
    <input name="email" class="email-forget" type="email" placeholder="Enter your mail address"> <br>

    <button class="button-forget" type="submit" name="submit_email">Kiem Tra</button>
    </form>
</div>