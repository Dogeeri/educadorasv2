import 'dart:convert';
import 'package:http/http.dart' as http;

class CursoProvider {
  final String apiURL = 'http://10.0.2.2:8000/api';

  Future<List<dynamic>> getCursos() async {
    var url = Uri.parse('$apiURL/curso');
    var respuesta = await http.get(url);

    if (respuesta.statusCode == 200) {
      return json.decode(respuesta.body);
    } else {
      return [];
    }
  }
}
