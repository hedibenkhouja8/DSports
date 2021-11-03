import 'package:mobile/Classes/building_class.dart';

class Studio extends Building{
  int _kitchen;

  Studio(String address,int rooms,int saleorrent,int surface,this._kitchen)
  :super(address, rooms, saleorrent, surface);

  int get kitchen => _kitchen;

  set kitchen(int value) {
    _kitchen = value;
  }
}