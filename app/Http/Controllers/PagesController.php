<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function getBlock($block_code = null)
    {
        if (empty($block_code)) {
            $listBlock = [];
            foreach (glob(base_path('resources') . "/views/frontend/blocks/*.php") as $file) {
                $blockName = str_replace([base_path('resources') . "/views/frontend/blocks/", '.blade.php'], '', $file);
                $listBlock[] = $blockName;
            }
            return view('backend.pages.blocks', [
                'blocks' => $listBlock
            ]);
        } else {
            $path = base_path('resources') . "/views/frontend/blocks/" . $block_code . ".blade.php";
            $fp = @fopen($path, "r+");

            if (!$fp) {
                echo 'Mở file không thành công';
            } else {
                $content = '';
                while (!feof($fp)) {
                    $content .= fgetc($fp);
                }
                //echo htmlentities($content); // hiển thị nguyên code
                echo html_entity_decode($content);
                die();
            }
        }
        return redirect()->route('admin.dashboard');
    }

    public function getPage()
    {

    }
}
