<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class About extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $data = [
        [
            'id' => 1,
            'buro_headline' => "Чем мы занимаемся",
            'buro_text' => "В составе опытных и талантливых дизайнеров, визуализаторов, архитекторов, инженеров и координаторов проектов, наше Арт-бюро предоставляет клиентам комплексный сервис, который позволяет реализовывать их самые смелые, амбициозные цели и пожелания.
Отлаженные связи с ведущими производителями, поставщиками мебели, предметов интерьера, декора, отделочных материалов, а также подрядчиками, гарантируют надлежащее выполнение подготовленных нами проектов на самом высоком уровне точности и качества.",
            'approach_headline' => "Наш подход",
            'approach_text' => "Предлагая услуги дизайна интерьеров, их декорирования, авторского надзора, комплектации, ориентированные на каждого конкретного заказчика, мы сосредоточены на создании уникальных, продуманных интерьеров и дизайнерских решений, которые выдержат испытание временем.
Мы придаем особое значение практичности и комфорту пространств, которые мы проектируем, организуя их так, чтобы они не только
изящно и стильно выглядели, вызывали чувства восторга, восхищения у окружающих, но и были уютными и удобными для жизни для
их владельцев.
Для работ нашего Арт-бюро, будь то дизайн декорирование или живопись в интерьере, характерны изысканность, элегантность и
выдержанность стиля, удобство и функциональность.",
            'project_headline' => "Мы создаем проекты, отражающие ваше уникальное мироощущение",
            'project_text' => "Мы стремимся превратить вашу квартиру, загородный дом или офис компании в комфортное личностное пространство с собственным,
 уникальным по духу и содержанию, обликом. Прорабатывая каждую деталь пространства и применяя передовые экспертные знания,
Арт-бюро стремится к созданию неповторимого.
",
            'philosophy_headline' => "Наша философия",
            'philosophy_text' => "Мы глубоко убеждены, что успех проектов нашего Арт-бюро зависит не только от конечного результата проекта, но и от самого процесса
его реализации, и мы гордимся предоставляемым уровнем обслуживания клиентов, выполняя ограниченное количество проектов, с
 тем, чтобы каждому клиенту нашего Арт-бюро было уделено необходимое время и внимание, которого он достоин.
",
        ]
    ];

    public function run()
    {
        DB::table('abouts')->truncate();
        DB::table('abouts')->insert($this->data);
    }
}
