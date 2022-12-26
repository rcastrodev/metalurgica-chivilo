<?php

use App\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Home  */
        /** Slider */
        for ($i=0; $i <= 2; $i++) { 
            Content::create([
                'section_id' => 1,
                'order'     => 'AA',
                'image'     => 'images/home/Enmascarargrupo186.png',
                'content_1' => '10 AÑOS DE EXPERIENCIA',
                'content_2' => 'Brindamos el servicio de tornería y mecanizado de piezas para la industria.'
            ]);
        }

        Content::create([
            'section_id'    => 2,
            'order'         => 'AA',
            'image'         => 'images/home/_p_3_p32497a_1.png',
            'content_1'     => 'NUESTRAS MÁQUINAS',
            'content_2'     => '<p>Somos una empresa, con años de experiencias en brindar servicios de mantenimiento, automatizacion y repuestos para la industria en general.</p>
            <p>Contamos con amplia gama de maquinaria que nos permite otorgarles la mejor calidad de terminación.</p>',
        ]);
        
        Content::create([
            'section_id'    => 3,
            'image'         => 'images/home/drill-444484_1920.png',
            'content_1'     => 'REALIZAMOS LA FABRICACIÓN De',
            'content_2'     => '<p>puntas de herramental para nuestras máquinas de mecanizado, torneado, rectificado y alesado.</p>'
        ]);

        Content::create([
            'section_id'    => 4,
            'image'         => 'images/home/Grupo1505.png',
            'content_1'     => 'ESTAMOS A SU ENTERA DISPOSICIÓN',
        ]);

        /** Fin home page */

        /** Empresa  */

        for ($i=0; $i < 5; $i++) { 
            Content::create([
                'section_id'    => 5,
                'order'         => 'AA',
                'image'         => 'images/company/Enmascarargrupo179.png',
            ]);
        }

        
        Content::create([
            'section_id'    => 6,
            'image' => 'images/company/Metalurgica-Velazquez-6.png',
            'content_1' => 'SOBRE NOSOTROS',
            'content_2' => '<p>Metalúrgica Chivilo, se fundó en 2010, el objeto principal fue la de optimizar y recuperar las piezas con desgaste a través del recificado y el mecanizado.</p><p>Nuestros profesionales y nuestro personal, son nuestro motor de crecimiento, son quienes dan respuesta a las necesidades de cada uno de nuestros clientes.</p><p>En la actualidad, un plantel calificado de operarios, técnicos, empleados y profesionales, con un nutrido grupo de asesores externos, permiten el manejo eficaz de la empresa.</p>',
        ]);
    
        Content::create([
            'section_id'    => 7,
            'order'         => 'AA',
            'image'         => 'images/company/factory.svg',
            'content_1'     => 'PLANTA PROPIA',
            'content_2'     => '<p>Contamos con una planta industrial en San Martín dónde concentramos el total de nuestras máquinas, administración, atención al cliente y ventas.</p>',
        ]);

        Content::create([
            'section_id'    => 7,
            'order'         => 'BB',
            'image'         => 'images/company/technology.svg',
            'content_1'     => 'ATENCIÓN PERSONALIZADA',
            'content_2'     => '<p>Respondemos a los problemas de nuestros clientes de forma personalizada, con responsabilidad y les ofrecemos soluciones de alta confiabilidad.</p>',
        ]);

        Content::create([
            'section_id'    => 7,
            'order'         => 'CC',
            'image'         => 'images/company/Enmascarar_grupo_540.png',
            'content_1'     => 'PERSONAL CALIFICADO',
            'content_2'     => '<p>El elevado conocimiento de nuestro personal nos permitan seguir manteniendo la calidad del producto y estar siempre al día con los requerimientos de seguridad.</p>',
        ]);
        

        Content::create([
            'section_id'    => 8,
            'image'         => 'images/services/Enmascarar_grupo_182.png',
            'content_1'     => 'MECANIZADO',
            'content_2'     => '<p>Brindamos el servicio de mecanizado de todo tipo de materiales. Además de realizar diseño de piezas repuesto para sus máquinas y equipos.</p><p>Nuestro centro de mecanizado admite piezas de hasta Ø60 mm y 2 mts de largo.</p>',
            'content_3'     => 'images/services/021---Gears-Cutting.svg'
        ]);

        Content::create([
            'section_id'    => 8,
            'image'         => 'images/services/Enmascarar_grupo_183.png',
            'content_1'     => 'TORNEADO',
            'content_2'     => '<p>Contamos con ejes de torneado de alto par y alta velocidad que ofrecen una rápida, precisa y agresiva capacidad para la remoción de metal.</p><p>Contamos con tornos tanto paralelos cómo CNC, que nos permiten adecuarnos a las necesidades de cada cliente.</p>',
            'content_3'     => 'images/services/lathe-machine.svg'
        ]);

    
        Content::create([
            'section_id'    => 8,
            'image'         => 'images/services/lathe-4027836_1920.png',
            'content_1'     => 'RECTIFICADO',
            'content_2'     => '<p>Gracias a nuestra maquinaria de precisión, podemos obtener rectificados de terminación similares a pulido espejo sanitario.</p><p>Los procesos al ser totalmente automatizados, nos permiten disminuir el tiempo empleado por pieza, lo que impacta directamente en los costos.</p>',
            'content_3'     => 'images/services/lathe-machine(1).svg'
        ]);

        Content::create([
            'section_id'    => 8,
            'image'         => 'images/services/Enmascarar_grupo_184.png',
            'content_1'     => 'FRESADO',
            'content_2'     => '<p>Contamos con amplia variedad de herramientas de desbaste, y así logramos ofrecemos una amplia gama de geometrías de las piezas resultantes.</p><p>Con nuestra maquinaria podemos hacer contorneado, fresado frontal, fresado por penetración, fresado en rampa y ranurado.</p>',
            'content_3'     => 'images/services/025---Milling.svg'
        ]);

        Content::create([
            'section_id'    => 8,
            'image'         => 'images/services/artem-beliaikin-SiA697XF2ds-unsplash.png',
            'content_1'     => 'ALESADO',
            'content_2'     => '<p>Contamos con maquinaria según si las piezas solicitadas sean livianas o pesadas. Pueden ejecutar diversos trabajos tales como: agujerear, tornear, filetear y fresar.</p><p>El proceso de remoción de viruta está mejorado.</p>',
            'content_3'     => 'images/services/021---Gears-Cutting.svg'
        ]);

        Content::create([
            'section_id' => 9,
            'order'     => 'AA',
            'image'     => 'images/clients/87.png',
            'content_1' => '',
        ]);

        Content::create([
            'section_id' => 9,
            'order'     => 'AA',
            'image'     => 'images/clients/descarga.png',
            'content_1' => '',
        ]);

        Content::create([
            'section_id' => 9,
            'order'     => 'AA',
            'image'     => 'images/clients/Imagen_6.png',
            'content_1' => '',
        ]);

        Content::create([
            'section_id' => 9,
            'order'     => 'AA',
            'image'     => 'images/clients/Imagen_7.png',
            'content_1' => '',
        ]);

        Content::create([
            'section_id' => 9,
            'order'     => 'AA',
            'image'     => 'images/clients/isologo-celulosa-argentina-referencia-400x342.png',
            'content_1' => '',
        ]);

        Content::create([
            'section_id' => 9,
            'order'     => 'AA',
            'image'     => 'images/clients/Logo-Papelera-Cumbre.png',
            'content_1' => '',
        ]);

        Content::create([
            'section_id' => 9,
            'order'     => 'AA',
            'image'     => 'images/clients/unnamed.png',
            'content_1' => '',
        ]);
    }
}

    