class Building {
  String _address;
  int _surface;
  int _rooms;
  int _saleORrent;


  Building(this._address,this._rooms,this._saleORrent,this._surface);

  String get address => _address.toString();

  set address(String value) {
    _address = value;
  }

  int get rooms => _rooms;

  int get surface => _surface;

  int get saleORrent => _saleORrent;

  set rooms(int value) {
    _rooms = value;
  }



  set saleORrent(int value) {
    _saleORrent = value;
  }



  set surface(int value) {
    _surface = value;
  }
}


