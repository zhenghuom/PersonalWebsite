<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MenuController extends BaseController
{
    //
    public function getMenu(){
        $list = DB::table('menus')->where('is_show',1)->get();
        $list = $this->_tree($list);

        return $this->success(['list'=>$list]);
    }

    private function _tree($list, $parentID = 0, $level = 0){
        $tree = array();
        foreach ($list as $key=>$val){

            if($val->parent_id == $parentID){
                $val->level = $level;
                $val->childer = $this->_tree($list,$val->id, $level+1);
                $tree[] = $val;
            }
        }
        return $tree;
    }

    public function index(){
        $list = DB::table('menus')->get();
        $data = array();
        $this->_menuTree($list,0,0,$data);
        $parentList = DB::table('menus')->where('parent_id',0)->orderBy('id','asc')->get();
        return View('admin.menu.index',['list'=>$data,'parent'=>$parentList]);
    }

    public function _menuTree($list, $parentID = 0, $level = 0,&$data){
        foreach ($list as $key=>$val){
            if($val->parent_id == $parentID){
                $val->level = str_repeat('&nbsp;', $level*3 );
                $data[] = $val;
                $this->_menuTree($list,$val->id, $level+1, $data);
            }
        }
    }

    public function editMenu(Request $request){
        $id = $request->id;
        $name = $request->name;
        $url = $request->url;
        $is_show = $request->is_show;
        $parent_id = $request->parent_id;
        if(empty($id) || !is_numeric($id)){
            return $this->fail('修改失败');
        }
        try{
            $info = DB::table('menus')->find($id);
            if(!$info){
                return $this->fail('修改失败');
            }

            $rt = DB::table('menus')->where('id',$id)->update([
                'name' => $name,
                'url' => $url,
                'is_show' => $is_show,
                'parent_id' => $parent_id
            ]);
            return $this->success();
        }catch (\Exception $e){
            return $this->fail($e->getMessage());
        }
    }

    public function addMenu(Request $request){
        $name = $request->name;
        $url = $request->url;
        $is_show = $request->is_show;
        $parent_id = $request->parent_id;

        $rt = DB::table('menus')->insertGetId([
            'name' => $name,
            'url' => $url,
            'is_show' => $is_show,
            'parent_id' => $parent_id
        ]);

        if(!$rt){
            return $this->fail('添加失败');
        }
        return $this->success();
    }

    public function delMenu(Request $request){
        $id = $request->id;
        $rt = DB::table('menus')->where('id', $id)->delete();
        if(!$rt){
            return $this->fail('删除失败');
        }
        DB::table('menus')->where('parent_id', $id)->delete();
        return $this->success();
    }
}
