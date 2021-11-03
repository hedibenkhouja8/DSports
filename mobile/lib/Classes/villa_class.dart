import 'package:mobile/Classes/building_class.dart';

class Villa extends Building{
  int _garden;
  int _pool;


  int get garden => _garden;

  set garden(int value) {
    _garden = value;
  }

  int get pool => _pool;

  set pool(int value) {
    _pool = value;
  }

  Villa(String address,int rooms,int saleorrent,int surface,this._pool,this._garden)
  :super(address, rooms, saleorrent, surface);
}