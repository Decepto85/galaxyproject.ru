<?
# �������� ������ � �������� ���������� ������� � ������ � �����:
$name = @ trim ($_POST['name']);
$email = @ trim ($_POST['email']);
$message = @ trim ($_POST['message']);
# ��������, �������� �� ��� ������
if (! $name or ! $email or ! $message) exit ('��������� �� ����������, ���������� ��������� ��� ������ �����');
# �������� ������ �� ���� ������
mail ("decepto@mail.ru",
      "��������� � ����� GalaxyProject.ru (�����������: $name)",
      "$message \n\n ��������: \n $email");
header ("Location: /index1.html#Links");
?>