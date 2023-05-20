<?php

namespace App\Helpers;

use Config;

class Template
{
    public static function showItemHistory($by, $time)
    {
        $xhtml = sprintf(
            '<p><i class="fa fa-user"></i> %s</p>
            <p><i class="fa fa-clock-o"></i> %s</p>',
            $by,
            date(Config::get('zvn.format.short_time'), strtotime($time))
        );
        return $xhtml;
    }

    public static function showItemStatus($controllerName, $id, $status)
    {
        $tmplStatus = [
            'active'   => ['name' => 'Kích hoạt', 'class' => 'btn-success'],
            'inactive' => ['name' => 'Chưa kích hoạt', 'class' => 'btn-info']
        ];

        $currentStatus = $tmplStatus[$status];
        $link = route($controllerName . '/status', ['status' => $status, 'id' => $id]);

        $xhtml = sprintf(
            '<a href="%s" type="button" class="btn btn-round %s">%s</a>',
            $link,
            $currentStatus['class'],
            $currentStatus['name']
        );
        return $xhtml;
    }

    public static function showItemThumb($controllerName, $thumbName, $thumbAlt)
    {
        $xhtml = sprintf(
            '<img src="%s" alt="%s" class="zvn-thumb" />',
            asset("images/$controllerName/$thumbName"),
            $thumbAlt
        );
        return $xhtml;
    }

    public static function showButtonAction($controllerName, $id)
    {
        $tmplButton   = [
            'edit'      => ['class' => 'btn-success', 'title' => 'Edit', 'icon' => 'fa-pencil', 'route-name' => '/form'],
            'delete'    => ['class' => 'btn-danger btn-delete', 'title' => 'Delete', 'icon' => 'fa-trash', 'route-name' => '/delete'],
            'info'      => ['class' => 'btn-info', 'title' => 'View', 'icon' => 'fa-pencil', 'route-name' => '/delete'],
        ];
        $buttonInArea = [
            'default'   => ['edit', 'delete'],
            'slider'    => ['edit', 'delete'],
        ];

        $controllerName = (array_key_exists($controllerName, $buttonInArea)) ? $controllerName : "default";
        $listButtons    = $buttonInArea[$controllerName]; // ['edit', 'delete']

        $xhtml = '<div class="zvn-box-btn-filter">';
        foreach ($listButtons as $btn) {
            $currentButton = $tmplButton[$btn];

            $link = route($controllerName . $currentButton['route-name'], ['id' => $id]);
            $xhtml .= sprintf(
                '<a href="%s" type="button" class="btn btn-icon %s" data-toggle="tooltip" data-placement="top" data-original-title="%s">
                    <i class="fa %s"></i>
                </a>',
                $link,
                $currentButton['class'],
                $currentButton['title'],
                $currentButton['icon']
            );
        }
        $xhtml .= '</div>';
        return $xhtml;
    }
}
