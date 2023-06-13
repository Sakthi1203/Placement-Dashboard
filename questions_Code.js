// creating an array and passing the number, questions, options, and answers
let questions = [
    {
    numb: 1,
    question: "What is output of below program?<br>int main(){<br>int i;<br>for(i=0; i<5; i++);{<br>printf('zoho');<br>}<br>return 0;}",
    answer: "zoho is printed 1 times",
    options: [
      "zoho is printed 5 times",
      "Compilation Error",
      "zoho is printed 1 times",
      "Nothing is printed"
    ]
  },
    {
    numb: 2,
    question: "What is output of below program?<br>int main(){<br>int i,j,k,count;<br>count=0;<br>for(i=0;i<5;i++){<br>for(j=0;j<5;j++){<br>  count++;}}<br>printf('%d',count);<br>return 0;<br>}",
    answer: "25",
    options: [
      "5",
      "10",
      "25",
      "50"
	  
    ]
  },
    {
    numb: 3,
    question: "What is output of the below program?<br>int main(){<br>int i,j;<br>for(i = 0,j=0;i<5;i++) {<br>   printf('%d%d--',i,j);<br> }<br> return 0;<br>}",
    answer: "00--10--20--30--40--",
    options: [
      "0--01--12--23--34--",
      "00--10--20--30--40--",
      "Compilation Error",
	  "00--01--02--03--04--"
    ]
  },
    {
    numb: 4,
    question: "What is output of the below program?<br>int main(){<br> int i;<br> for(i=0; i<5; ++i++) {<br>   printf('Hello');<br> }<br> return 0;<br>}<br>",
	answer: "Compilation Error",
    options: [
      "Hello is printed 5 times",
      "Compilation Error",
      "Hello is printed 2 times",
	  "Hello is printed 3 times"
    ]
  },
    {
    numb: 5,
    question: "What is the output of the below program?<br>int main(){<br> int i;<br> for(i = 0,i<5,i++) {<br>   printf('Hello');<br> }<br> return 0;<br>}",
    answer: "Compilation Error",
    options: [
      "Hello is printed 5 times",
      "Compilation Error",
      "Hello is printed 4 times",
      "Runtime Error"
    ]
  },
  // you can uncomment the below codes and make duplicate as more as you want to add question
  // but remember you need to give the numb value serialize like 1,2,3,5,6,7,8,9.....

  //   {
  //   numb: 6,
  //   question: "Your Question is Here",
  //   answer: "Correct answer of the question is here",
  //   options: [
  //     "Option 1",
  //     "option 2",
  //     "option 3",
  //     "option 4"
  //   ]
  // },
];