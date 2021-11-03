import './person_class.dart';

class User extends Person {
  String email;
  String password;
  int role;

  
  User(String name, String phone,String lastname,String  address, this.email, this.password,this.role)
      : super(name,lastname, phone, address);
}