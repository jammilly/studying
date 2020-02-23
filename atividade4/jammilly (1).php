<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tabela php</title>
</head>
<style>
body{
 background:#7B68EE;
}

form{
  margin: auto;
  width: 400px;
  margin-top: 40px;
  padding: 40px;
  border: 1px solid black;
  border-radius: 1em;
  border-collapse: collapse;
  background: #E6E6FA;

}

input[type=text]{
    width: 400px;
    height: 50px;
    text-align: center;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    font-family: 'play', sans-serif;
    font-size: 16px;
    font-weight: 200px;
    transition: border 0.5s;
    outline: none;
    color:#000;

}
input[type=email]{
  width: 400px;
    height: 50px;
    text-align: center;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    font-family: 'play', sans-serif;
    font-size: 16px;
    font-weight: 200px;
    transition: border 0.5s;
    outline: none;
    color:#000;

}
input[type=number]{
  width: 400px;
    height: 50px;
    text-align: center;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    font-family: 'play', sans-serif;
    font-size: 16px;
    font-weight: 200px;
    transition: border 0.5s;
    outline: none;
    color:#000;

}
input[type=submit]{
    color: #000;
    border: none;
    width: 400px;
    background: #fff;
    font-size: 16px;
    line-height: 10px;
    padding: 10px 0;
    border-radius: 15px;
    cursor:pointer;



}
input[type=submit]:hover{
  color:#000;
  background-color: #E0FFFF;

}
::placeholder{
  color:#4B0082;
  opacity: 0.8;
}

input[type=button]{
    color: #000;
    margin-left: 720px;
    border: none;
    width: 400px;
    background: #fff;
    font-size: 16px;
    line-height: 10px;
    padding: 10px 0;
    border-radius: 15px;
    cursor:pointer;
    margin-top: 50px;


}
input[type=button]:hover{
  color:#000;
  background-color: #E0FFFF;

}
</style>

<body>

  
           
    <form action="dados.php" method="POST"  >
        <h2>Sign in</h2> 
         <input class="pn" type="text" name="nome" placeholder="primeiro nome" required=" ">
         <input type="email" name="email" placeholder="digite seu email" required=" ">
         <input type="number" name="idade" placeholder="digite sua idade" required=" ">
         <input  id="pais" type="text" name="pais" placeholder="pais" required=" "><br><br><br><br>
         <input  type="submit" name="enviar" value="enviar" >
    </form>

 

    
    
  
    <a href="untitled.php"><input  type="button" value="ver tabela" ></a>
</body>
</html>
