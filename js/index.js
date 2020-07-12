function validateForm(form) {
              var password1 = form.s_password.value;
              var password2 = form.s_confirm_password.value;
              var s_name=form.s_name.value;
              var s_school=form.s_school.value;
              var s_address=form.s_address=.value;
              var s_board=form.s_board.value;
              var s_grade=form.s_grade.value;
              var s_branch=form.s_branch.value;
              var s_gender=form.s_gender.value;
              var s_email=form.s_email.value;
              var s_phone=form.s_phone.value;
              var s_q_number=form.s_q_number.value;
              var s_q_answer=form.s_q_answer.value;

               if(s_name==""){
               alert("Please enter name");
               return false;
                }
               else if(s_school=""){
               alert("Please enter school name");
               return false;
                }
               else if(s_email=""){
               alert("Please enter mail");
                return false;
                }
               else if(s_phone=""){
               alert("Please enter phone number");
               return false;

              }
               else if(s_q_answer="")
               alert("Please enter secret answer");{
                 return false;

               }
               else if (password1 == ''){
                   alert ("Please enter Password");
                   return false;

                 }

               // If confirm password not entered
               else if (password2 == '')
                   alert ("Please enter confirm password");

               // If Not same return False.
               else if (password1 != password2) {
                   alert ("\nPassword did not match: Please try again...")
                   return false;
               }

               // If same return True.
               else{
                   alert("Password Match: Welcome to GeeksforGeeks!")
                   return true;
               }
           }
