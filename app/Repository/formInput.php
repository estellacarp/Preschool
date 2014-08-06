<?php 
namespace Repository;


use abc;
use Validator;
use Input;
use Redirect;



class formInput implements formInterface{

	public function inData(){

		$validation = Validator:: make(Input::all(), abc::$rules);

			if ($validation->fails()) {
				return Redirect::back()->withInput()->withErrors($validation->messages());
			}
			$abc = new abc;
			$abc->Title = Input::get('Title');
			$abc->Description = Input::get('Desc');
			

			if (Input::hasFile('ImageBig')) {
				$img = Input::file('ImageBig');
				$nameBig = $abc->Title.'big';
				$nameSmall= $abc->Title.'small';
				$abc->ImageBig = $nameBig;
				$abc->Image= $nameSmall;

				$imageObjs = \Image::make($img);
				$imageObjs->resize(200, null, function ($constraint) {
			    $constraint->aspectRatio();
				})->save(public_path().'/asset/image/'.$nameSmall);
		
				$imageObjb = \Image::make($img);
				$imageObjb->resize(500, null, function ($constraint) {
			    $constraint->aspectRatio();
				})->save(public_path().'/asset/image/'.$nameBig);

			}

			$projects->save();
			

	}
}