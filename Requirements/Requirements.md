# ���������� � �������
---

# ����������
1 [��������](#intro)  
1.1 [����������](#appointment)  
1.2 [������-����������](#business_requirements)  
1.2.1 [�������� ������](#initial_data)  
1.2.2 [����������� �������](#business_opportunities)  
1.2.3 [������� �������](#project_boundary)  
2 [���������� ������������](#user_requirements)  
2.1 [��������� ������������](#user_interface)  
2.2 [�������������� �������������](#user_specifications)  
2.3.1 [������ �������������](#user_classes)  
2.3.2 [��������� ����������](#application_audience)  
2.4 [������������� � �����������](#assumptions_and_dependencies)  
3 [��������� ����������](#system_requirements)  
3.1 [�������������� ����������](#functional_requirements)  
3.1.1 [�������� �������](#main_functions)  
3.1.1.1 [������� ��������](#main_page)  
3.1.1.2 [������ �������](#personal_page)

3.2 [���������������� ����������](#non-functional_requirements)  
3.2.1 [�������� ��������](#quality_attributes)  
3.2.2 [������� ����������](#external_interfaces)  
3.2.3 [�����������](#restrictions)  

<a name="intro"/>

# 1 ��������
�������� �������: "Health"

���������� �������������� ��� ������� �������, �������������� ��������� ����������� ������.

<a name="appointment"/>

## 1.1 ����������
� ���� ��������� ������� �������������� � ���������������� ���������� � ���������� �Health�. ���� �������� ������������ ��� �������, ������� ����� ������������� � ��������� ������������ ������ ����������. 

<a name="business_requirements"/>

## 1.2 ������-����������

<a name="initial_data"/>

### 1.2.1 �������� ������
����������� ����� ������������ ����������� ����������, ��������. ������ � ����� � ����������� ������� �������������� ����� ��������, ��� ������ � ������� � ������������.    

<a name="business_opportunities"/>

### 1.2.2 ����������� �������
������ ���� ������ ����� ����������, ������� �������� ���������� � ����� � �������� ��������� �� ������ � �������, �� ������ �� ����. �������� ���������� �������� �� ������� ������ �������, ��� ������������� ������� ����������� � �������� � ��������. 

<a name="project_boundary"/>

### 1.2.3 ������� �������
���������� �Health� �������� ������������������ ������������� ������������� ���������� �� �� ������� � �������. ��� ��������� ������������� ������������� ����������� ��������� ���������� � ����� �������, ������ � ��������������� �������.

<a name="user_requirements"/>

# 2 ���������� ������������

<a name="user_interface"/>

## 2.1 ��������� ������������

## ������� �������� ����������.
 ����� �������� �� ������, ������������ �������� �� ������� �������� ���-����������: 
![������� �������� ����������](./Mockups/main_page.png)  
����� ������������ ������� ���������� � ������� � ���� ��� ����������� ������������ �� �����. ������ ������ � ���������� ������������ ������������� (����������, ���������, ����������, ��������������) �������� ������������ �������� ����� ��������� ���������� �� ����������� �������. 

## ���������� �� �������.  
 ��� ������� �� ���� �� ������ � ����������� ������������ (����������, ���������, ����������, ��������������), �� �������� �� ��������� ��������:
![���������� �� �������](./Mockups/main_page_info.png)  
 ����� ����� ������ ����������� �� ��������� ����������� � �������, ����������� ������ �����������. ����� ����� ����� ������ ��������� ����������� �����. ��� �������� �� ������� �������� ����� ������ �� ������� ��������.
 
## ���� �����������.  
���� ������������ ����� �� ���� ������� � ����� �������� ������ � �������, ��� ���������� ������������������. ��� ����� �� ������� �������� ����� ������ ������ _"�����������"_. ����� ���� �� �������� �� ��������� ��������:
![���� �����������](./Mockups/sign_up.png)  

## ���� �����.  
���� � ������������ ��� ���� �������, �� ��� ��������� ������� � ������� ����������� ����������, ��� ��������� ����������������. ��� ����� �� ������� �������� ����� ������ ������ _"�����"_. ����� ���� �� �������� �� ��������� ��������:
![���� �����](./Mockups/sign_in.png)  

## ������� �������� ����������������� ������������.
����� ����������� ������������ �������� �� ������� ��������: 
![������� �������� ����������������� ������������](./Mockups/main_page_sign_in.png)
�� ������ ������ ������ ������� ��� ��� � �������, � ����� ��������� ������, ����� ����� �� �������� ��� ����� ������� � ������ �������.

## ������ ������� ������� "�������".   
����� ������� ������ _"������ �������"_, ������������ �������� � ������ �������:
![������ ������� ������� "�������"](./Mockups/personal_page_profile.png)  
����� ����� �������� ������ ������� ��� ������� � ��������� ��������, ����� �� ��������������� ������.

## ������ ������� ������� "������� ������".  
����� ������� ������ _"������� ������"_, ������������ �������� �� ��������� ��������:
![������ ������� ������� "������� ������"](./Mockups/personal_page_ov.png)  
����� ��������� ���������� � ��������� ��������� ������. ������ ������ �������� ������� ������� (��� ������� ����������� �� ����, ����� ����� ������), � ����� ������� �� ������ ������.

## ������ ������� ������� "������������ �����������".  
����� ������� ������ _"������������ ������������"_, ������������ �������� �� ��������� ��������:
![������ ������� ������� "������������ �����������"](./Mockups/personal_page_lab.png)  
����� ��������� ���������� ���� ������������ ������������.

## ������ ������� ������� "������".  
����� ������� ������ _"������"_, ������������ �������� �� ��������� ��������:
![������ ������� ������� "������"](./Mockups/personal_page_t.png)  
����� ����� ���������� �������� ������. �����, ���� ������ ������ _"�������� �����"_, ����� ���������� � �����.

## ���� "�������� �����".  

![���� "�������� �����"](./Mockups/personal_page_ot.png)  

<a name="user_specifications"/>

## 2.2 �������������� �������������

<a name="user_classes"/>

### 2.3.1 ������ �������������

| ����� ������������� | �������� |
|:---|:---|
| ��������� ������������ | ������������, ������� �� ����� ���������������� � ����������. ����� ������ � ���������� ����������� (������ �������� ���������� � �������)|
| ������������������ ������������ | ������������, ������� ����� � ���������� ��� ����� ������. ����� ������ � ������� ����������� |

<a name="application_audience"/>

### 2.3.2 ��������� ����������

���� ���������� ������ 18+ � ����� ������� �����������. 

<a name="collateral_audience"/>

## 2.4 ������������� � �����������
1. ���������� �� �������� ��� ���������� ����������� � ���������;
2. ��� ������ ���������� ��������� ����� �� ����������� ��������� �����, ��� Opera, Chrome, Firefox � �� �������.
3. ���������� �������� ������ �� ��.
<a name="system_requirements"/>

# 3 ��������� ����������

<a name="functional_requirements"/>

## 3.1 �������������� ����������

<a name="main_functions"/>

### 3.1.1 �������� �������

<a name="main_page"/>

#### 3.1.1.1 ������� ��������
**��������.** �� ������� �������� ����������� ���������� � ������� � ��������������� �������, ���� ����� � �����������.
| ������� | ���������� | 
|:---|:---|
| �������� ���������� | ���������� ������ ������������ ������������ ����������� ���������� ���������� � ������� � � ��������������� ������� |
| <a name="registration_requirements"/>����������� ������ ������������ | ���������� ������ ��������� � ������������ ������ ������ (���, ����� ��������, ����������������� �����, ����� ����������) ��� �������� ������� ������. ������������ ������ ���� ������ ������, ���� �������� �������� |
| ���� ������������������� ������������ � ���������� | ���������� ������ ��������� ����� �������� � ������ ��� ����� � ������� ������. ������������ ������ ���� ������ ���� ������, ��������� ��� �����������, ���� �������� �������� |

<a name="personal_page"/>

#### 3.1.1.2 ������ �������
**��������.** ������������������ ������������ ����� ����������� ����� � ������ ������� � �������� ������ � ������������ �����������.
 
| ������� | ���������� | 
|:---|:---|
| �������������� ������� | ������ ���� ����������� �������������� ������� |
| ���������� � ��������� ������� | ������������������ ������������ ����� ����������� ���������� ���������� � ��� ���������� ������� �����, ��� ������ ����� � ���������� ������������ ����������� |
| ��������� ������ | ���������� ������ ������������ ������������������� ������������ ���� ��� ������ ����, ����������� � ���������� � ��������� ������� |

<a name="non-functional_requirements"/>

## 3.2 ���������������� ����������

<a name="quality_attributes"/>

### 3.2.1 �������� ��������

1. ��� �������������� �������� ����������������� ���������� ����� ��������, ����������� ��������, ������� ���������� ��� ������ ��������;
2. ���������� �������� ���������.

<a name="external_interfaces"/>

### 3.2.2 ������� ����������
���� ���������� ������ ��� ������������� �������������� � ������ �������:
  * ������ ������ �� ����� 14��;
  * �������������� �������� ���������� ���� ����;
  * ���������� �� ������ ���� ���������� � ������� ������������ � �����������, ��-�� ������� ������� �������� ���������� �������;
  * ���������� ������ ���� � ���������� ������, ������������� ����������� ����� (�����, �������, ����� � ������).
  
<a name="restrictions"/>

### 3.2.3 �����������
1. ���������� ����������� � �������������� ��������� ������ HTML5, CSS3, JS  and PHP 8;
2. ��� �������� ������ ������������ ������������ phpMyAdmin.
3. ������� � �� �������������� � ������� MySQL.