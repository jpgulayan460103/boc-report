<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportStoreRequest;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::orderBy('id', 'desc')->get();
        return view('reports', [
            'reports' => $reports
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return DB::transaction(function() use ($request){
            $report = Report::create($request->all());
            $files = $request->file('reportImages');
            if($files != array()){
                foreach ($files as $file) {
                    $image_path = $file->store("public/{$report->id}");
                    $report->reportImages()->create([
                        'image_path' => $image_path
                    ]);
                }
            }
            return $report;
        });
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report, $id)
    {
        $report = Report::with('reportImages')->find($id);
        $report->images = $report->reportImages->chunk(4);
        $pdfConfig =  [
            'margin_left' => 6.35,
            'margin_right' => 6.35,
            'margin_top' => 6.35,
        ];

        // return view('pdf.report');
        $pdf = PDF::loadView('pdf.report', $report, [], $pdfConfig);

        return $pdf->stream('report.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::transaction(function() use ($request, $id){
            $report = Report::find($id)->update($request->all());
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
