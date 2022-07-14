<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services.index',[
            'services'=> Service::orderBy('id','asc')->filter
            (request(['search']))->paginate(6)
        ]);
    }

    public function edit(Service $service)
    {
        return view('admin-panel.edit-service',[
            'service'=> $service
        ]);
    }

    public function show(Service $service)
    {
        return view('services.service-detail',[
            'service'=> $service,
            'sideNews'=>News::orderBy('id','desc')->take(4)->get(),
            'sideServices'=>Service::latest()->take(5)->get(),
            'moreServices'=>Service::inRandomOrder()->where('id','!=',$service->id)->take(2)->get()
        ]);
    }

    public function services()
    {
        return view('admin-panel.show-services',[
            'service'=>Service::latest()
            ->filter(request(['search']))
            ->paginate($perPage = 6)
            ->appends(request()->query())
        ]);
    }

    public function create()
    {
        return view('admin-panel.create-service');
    }

    public function store(Request $request)
    {
       $data = $request->validate([
            'title'=>['required','min:3','max:200'],
            'description'=>['required','min:3','max:10000']
        ]);

        Service::create($data);

        return redirect(env('APP_URL').'admin-panel/service');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return back();
    }
}
