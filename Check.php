<?php

  function ValueCheck($ItemPrice){
  
    if(($ItemPrice < 0) or (empty($ItemPrice)) or ($ItemPrice > 2147483647)){
      return TRUE;
    }
    
    return FALSE;
  
  }

  function ValueRangeCheck($ItemPrice){
  
    if(($ItemPrice < 0) or ($ItemPrice > 2147483647) and !empty($name)){
      return TRUE;
    }
    
    return FALSE;
  
  }

  function InputNameCheck($ItemName){

    if((SyntaxCheck($ItemName)) or (empty($ItemName))){
      return TRUE;
    }
    
    return FALSE;
    
  }

  function SearchNameCheck($ItemName){
  
    if((SyntaxCheck($ItemName) and !empty($name))){
      return TRUE;
    }
    
    return FALSE;
  
  }

  function SyntaxCheck($ItemName){
    $errorSyntax = "/<head|head>|<body|body>|<form|form>|<input|<br>/";
    
    if(preg_match($errorSyntax, $ItemName)){
      return TRUE;
    }
    
    return FALSE;
  }

?>
