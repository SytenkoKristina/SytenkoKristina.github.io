//������� �������� �����, ��������� ��� ��������� name1, � name2 
function check_fields(name1, name2) { 
  //���� �������� name1 � name2 �� ����� 
  if (document.getElementsByName(name1).value != "") &&  
     (document.getElementsByName(name2).value != "") 
   { 
    //�� �����, ��� "���� �� �����" 
     document.write("���� �� �����"); 
   } 
  else // ����� 
  {   
    //����� ��� 
    document.write("���� ��� ��� ���� �����"); 
  } 
} 
