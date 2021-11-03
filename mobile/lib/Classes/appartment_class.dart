import 'package:mobile/Classes/building_class.dart';

class Appartment extends Building{
  int _floor;

  Appartment(String address,int rooms,int saleorrent,int surface,this._floor)
    :super(address, rooms, saleorrent, surface);


  int get floor => _floor;

  set floor(int value) {
    _floor = value;
  }
}