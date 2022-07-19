<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Evidencia;
use App\Http\Requests\EvidenciaFormRequest;

class EvidenciasController extends Controller{
    public function index(Request $request){
        //var_dump($request->query());
        $evidencias = Evidencia::query()->orderBy('evid_descri')->get();
        $mensagem = $request->session()->get('msg');
        return view('evidencias.index',['evidencias'=>$evidencias,'msg'=>$mensagem]);
    }
    public function create(){
        return view('evidencias.create');
    }   
    public function store(EvidenciaFormRequest $request){
        $descri = $request->evid_descri;
        $tipoEvid_id =$request->tipoEvid_id;
        //dd($request->all());
        // $evidencia =Evidencia::create([
        //     'evid_descri'=> $descri,
        //     'tipoEvid_id'=> $tipoEvid_id
        // ]);
        $evidencia =Evidencia::create($request->all());
        //$evidencia =Evidencia::create($request->except(['_-token'])); gravaria tudo menos o token
        //$evidencia =Evidencia::create($request->only(['evid_descri','tipoEvid_id'])); nmino so campos que vou gravar
        // Crio um registro no banco pegando todos atributos do formulário definidos no model
        //o flashh é como se fosse um put, so qu existe apenas para uma seção
        //$request->session()->flash('msg',"Evidência com id {$evidencia->id} Criada");
        return redirect()->route('evidencias.index')->with('msg',"Evidência com id '{$evidencia ->evid_descri}' Criada");
    }
    public function destroy(Evidencia $evidencia){
        //Evidencia::destroy($request->evid_id);
        //    $request->session()->flash('msg',"Evidência com id {$request->evid_id} apagada");
        //    return redirect()->route('evidencias.index');
        $evidencia->delete();
        return redirect()->route('evidencias.index')->with('msg',"Evidência com id '{$evidencia ->evid_descri}' apagada");
    }
    public function edit(Evidencia $evidencia){
        return view('evidencias.edit')->with('evidencia',$evidencia);
    }   
    public function update(Evidencia $evidencia,Request $request){

        dd($request->all());

        $evidencia->evid_descri = $request->evid_descri;
        $evidencia->evid_id = $request->evid_id;
        $evidencia->save();
        return redirect(route('evidencias.index'))->with('msg','{$request->evid_decri}Atualizado');
    }
}   