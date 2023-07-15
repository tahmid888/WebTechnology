



        function checkname()
        {
            var namevalue=document.getElementById("uname").value;
            
            if(namevalue.length<5 &&  !isNaN(namevalue))
            {
                document.getElementById("unameerror").innerHTML="Name error";
                return false;
            }
            else
            {
                document.getElementById("unameerror").innerHTML="Name is ok";
                return true;
            }
        }







       
       function checkphone()
       {
           var namevalue=document.getElementById("phonenumber").value;
           if(namevalue.length>=11)
           {
               document.getElementById("phoneerror").innerHTML="Phone number error";
           }
           else
           {
               document.getElementById("phoneerror").innerHTML="Number is ok";
           }
       }

       

       function checknid()
       {
           var nidvalue=document.getElementById("nid").value;
           if(isNaN(nidvalue))
           {
               document.getElementById("niderror").innerHTML="Nid error";
           }
           else
           {
               document.getElementById("niderror").innerHTML="Nid is ok";
           }
       }

       function checkemail()
       {
        var x=document.getElementById("email").value; 
        var atposition=x.indexOf("@");  
        var dotposition=x.lastIndexOf(".");  
        if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
        //  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
          document.getElementById("niderror").innerHTML="Nid is ok";
          return false;  
          }  
       }

       // radio button for gender

 
function checkButton() {          
if(document.getElementById('male').checked) {   
    document.getElementById("disp").innerHTML   
        = document.getElementById("male").value   
        + " radio button is checked";   
}   
else if(document.getElementById('female').checked) {   
    document.getElementById("disp").innerHTML   
        = document.getElementById("female").value   
        + " radio button is checked";     
}   

}
        
    

       function checkcity()
       {
           var usercityvalue=document.getElementById("city").value;
           if(!isNaN(usercityvalue))
           {
               document.getElementById("cityerror").innerHTML="City error";
           }
           else
           {
               document.getElementById("cityerror").innerHTML="Ok";
           }
       }

       function checkaddress()
       {
           var useraddressvalue=document.getElementById("address").value;
           if(!isNaN(useraddressvalue))
           {
               document.getElementById("addresserror").innerHTML="Address error";
           }
           else
           {
               document.getElementById("addresserror").innerHTML="Ok";
           }
       }

       function checkuserid()
       {
           var useridvalue=document.getElementById("userid").value;
           if(isNaN(useridvalue))
           {
               document.getElementById("useriderror").innerHTML="User id error";
           }
           else
           {
               document.getElementById("useriderror").innerHTML="Id is ok";
           }
       }


       function checkboxButton1() {          
        if(document.getElementById('fixed deposit account').checked) {   
            document.getElementById("disp").innerHTML   
                = document.getElementById("fixed deposit account").value   
                + "Checkbox is checked";   
        }   
        else if(document.getElementById('saving account').checked) {   
            document.getElementById("disp").innerHTML   
                = document.getElementById("saving account").value   
                + "Checkbox is checked";     
        }   
        else if(document.getElementById('recurring deposit account').checked) {   
            document.getElementById("disp").innerHTML   
                = document.getElementById("recurring deposit account").value   
                + "Checkbox is checked";     
        }   
        }

        

        function checkboxButton2() {          
            if(document.getElementById('acc1').checked) {   
                document.getElementById("disp").innerHTML   
                    = document.getElementById("acc1").value   
                    + "Selected";   
            }   
            else if(document.getElementById('acc2').checked) {   
                document.getElementById("disp").innerHTML   
                    = document.getElementById("acc2").value   
                    + "Selected";     
            }   
           
            }

                               //WIDTHROWAL

            function checkbranch()
            {
                var namevalue=document.getElementById("branch").value;
            
                if(namevalue.length<5 &&  !isNaN(namevalue))
                {
                    document.getElementById("brancherror").innerHTML="Branch error";
                    return false;
                }
                else
                {
                    document.getElementById("brancherror").innerHTML="Branch is ok";
                    return true;
                }

                }

                function checksection()
                {
                    var namevalue=document.getElementById("section").value;
                
                    if(namevalue.length<5 &&  !isNaN(namevalue))
                    {
                        document.getElementById("sectionerror").innerHTML="Section error";
                        return false;
                    }
                    else
                    {
                        document.getElementById("sectionerror").innerHTML="Section is ok";
                        return true;
                    }
    
               }


        function checkamount()
        {
           var nidvalue=document.getElementById("amount").value;
           if(isNaN(nidvalue))
           {
               document.getElementById("amounterror").innerHTML="Amount error";
           }
           else
           {
               document.getElementById("amounterror").innerHTML="Amount is ok";
           }
        }
            
        function checkpin()
        {
            var namevalue1=document.getElementById("pin").value;
            if( isNaN(namevalue1))
            {
                document.getElementById("pinerror").innerHTML="PIN number error";
                return false;
            }
            else
            {
                document.getElementById("pinerror").innerHTML="PIN is ok";
                return true;
            }
        }

                                          //Transfer money


                                          function checkdisired()
                                          {
                                              var namevalue=document.getElementById("dbank").value;
                                          
                                              if(namevalue.length<5 &&  !isNaN(namevalue))
                                              {
                                                  document.getElementById("dbankerror").innerHTML=" Desired Branch error";
                                                 
                                                  return false;
                                              }
                                              else
                                              {
                                                  document.getElementById("dbankerror").innerHTML="Desired Branch is ok";
                                                  return true;
                                              }
                              
                                              }

          function checkamounts()
        {
           var nidvalue=document.getElementById("amount").value;
           if(isNaN(nidvalue))
           {
               document.getElementById("amounterror").innerHTML="Amount error";
           }
           else
           {
               document.getElementById("amounterror").innerHTML="Amount is ok";
           }
        }
                              
                                              function checkreference()
                                              {
                                                  var namevalue=document.getElementById("reference").value;
                                              
                                                  if(namevalue.length<5 &&  !isNaN(namevalue))
                                                  {
                                                      document.getElementById("referenceerror").innerHTML="Reference error";
                                                      return false;
                                                  }
                                                  else
                                                  {
                                                      document.getElementById("referenceerror").innerHTML="Reference is ok";
                                                      return true;
                                                  }
                                  
                                             }
                                                      
                                     
                                             function checkpins()
                                             {
                                                 var namevalue1=document.getElementById("pin").value;
                                                 if( isNaN(namevalue1))
                                                 {
                                                     document.getElementById("pinerror").innerHTML="PIN number error";
                                                     return false;
                                                 }
                                                 else
                                                 {
                                                     document.getElementById("pinerror").innerHTML="PIN is ok";
                                                     return true;
                                                 }
                                             }

     //Deposit money
                                       function checkbranch()
                                          {
                                              var namevalue=document.getElementById("branch").value;
                                          
                                              if(namevalue.length<5 &&  !isNaN(namevalue))
                                              {
                                                  document.getElementById("brancherror").innerHTML=" Desired Branch error";
                                                 
                                                  return false;
                                              }
                                              else
                                              {
                                                  document.getElementById("brancherror").innerHTML="Desired Branch is ok";
                                                  return true;
                                              }
                              
                                              }
                                              function checkaccount()
                                              {
                                                  var namevalue=document.getElementById("account").value;
                                              
                                                  if(namevalue.length<5 &&  !isNaN(namevalue))
                                                  {
                                                      document.getElementById("accounterror").innerHTML="Account no error";
                                                      return false;
                                                  }
                                                  else
                                                  {
                                                      document.getElementById("accounterror").innerHTML="Account no is ok";
                                                      return true;
                                                  }
                                                }
                                                function checkafigures()
                                                {
                                                   var nidvalue=document.getElementById("afigures").value;
                                                   if(isNaN(nidvalue))
                                                   {
                                                       document.getElementById("afigureserror").innerHTML="Amount error";
                                                   }
                                                   else
                                                   {
                                                       document.getElementById("afigureserror").innerHTML="Amount is ok";
                                                   }
                                                }      
                                                
                                                


                                                // get loan

                                                function checkbranch2()
                                                {
                                                    var namevalue=document.getElementById("branch").value;
                                                
                                                    if(namevalue.length<5 &&  !isNaN(namevalue))
                                                    {
                                                        document.getElementById("brancherror").innerHTML=" Desired Branch error";
                                                       
                                                        return false;
                                                    }
                                                    else
                                                    {
                                                        document.getElementById("brancherror").innerHTML="Desired Branch is ok";
                                                        return true;
                                                    }
                                    
                                                    }
                                                    function checkpurpose()
                                                    {
                                                        var namevalue=document.getElementById("purpose").value;
                                                    
                                                        if( !isNaN(namevalue))
                                                        {
                                                            document.getElementById("purposeerror").innerHTML="Purpose error";
                                                            return false;
                                                        }
                                                        else
                                                        {
                                                            document.getElementById("purposeerror").innerHTML="Purpose is ok";
                                                            return true;
                                                        }
                                        
                                                   }
                                                   function checkexperience()
                                                   {
                                                       var namevalue=document.getElementById("experience").value;
                                                   
                                                       if(  !isNaN(namevalue))
                                                       {
                                                           document.getElementById("experienceerror").innerHTML="Experience error";
                                                           return false;
                                                       }
                                                       else
                                                       {
                                                           document.getElementById("experienceerror").innerHTML="Experience is ok";
                                                           return true;
                                                       }
                                       
                                                  }
                                                  function checkprofile()
                                                  {
                                                      var namevalue=document.getElementById("profile").value;
                                                  
                                                      if(!isNaN(namevalue))
                                                      {
                                                          document.getElementById("profileerror").innerHTML="Profile error";
                                                          return false;
                                                      }
                                                      else
                                                      {
                                                          document.getElementById("profileerror").innerHTML="Profile is ok";
                                                          return true;
                                                      }
                                      
                                                 }
                                                 function checkhistory()
                                                 {
                                                     var namevalue=document.getElementById("history").value;
                                                 
                                                     if(namevalue.length<5 &&  !isNaN(namevalue))
                                                     {
                                                         document.getElementById("historyerror").innerHTML="History error";
                                                         return false;
                                                     }
                                                     else
                                                     {
                                                         document.getElementById("historyerror").innerHTML="History is ok";
                                                         return true;
                                                     }
                                     
                                                }
