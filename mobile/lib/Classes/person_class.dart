class Person {
  String _name;
  String _lastname;
  String _address;
  String _phone;


  String get address => _address.toString();

  set lastname(String value) {
    _lastname = value;
  }

  set address(String value) {
    _address = value;
  }

  String get lastname => _lastname.toString();


  String get name => _name.toString();

  Person(this._name, this._phone,this._lastname,this._address);

  set name(String value) {
    _name = value;
  } // phone attribute getter & setter
  String get phone => _phone.toString();

  set phone(String value) {
    _phone = value;
  }

}