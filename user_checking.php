<?php 
  //��������� POST ����������  
  $lastName = $_POST['last_name']; //������� 
  $firstName = $_POST['first_name']; //��� 
 
  //���� ���� "�������" � "���" �� ����� 
  if (!empty($lastName) && !empty($firstName)) 
  { 
    //�����  
    echo "����������� ��� $lastName $firstName. <br />"; 
  } 
  else //����� 
  {  
    //����� 
    echo "��� �� ������� ������ ��� ������?"; 
    //� ������� ������������ �� index.html ����� 15 ����������� 
    echo "<meta http-equiv='refresh' content='15; url=index.html' />"; 
  } 
?> 