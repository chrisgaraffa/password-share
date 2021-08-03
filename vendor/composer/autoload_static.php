<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited6a6fef3b79c734c90c6203817cd8e1
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bramus\\Ansi\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bramus\\Ansi\\' => 
        array (
            0 => __DIR__ . '/..' . '/bramus/ansi-php/src',
        ),
    );

    public static $classMap = array (
        'Bramus\\Ansi\\Ansi' => __DIR__ . '/..' . '/bramus/ansi-php/src/Ansi.php',
        'Bramus\\Ansi\\ControlFunctions\\Backspace' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlFunctions/Backspace.php',
        'Bramus\\Ansi\\ControlFunctions\\Base' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlFunctions/Base.php',
        'Bramus\\Ansi\\ControlFunctions\\Bell' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlFunctions/Bell.php',
        'Bramus\\Ansi\\ControlFunctions\\CarriageReturn' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlFunctions/CarriageReturn.php',
        'Bramus\\Ansi\\ControlFunctions\\Enums\\C0' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlFunctions/Enums/C0.php',
        'Bramus\\Ansi\\ControlFunctions\\Escape' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlFunctions/Escape.php',
        'Bramus\\Ansi\\ControlFunctions\\LineFeed' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlFunctions/LineFeed.php',
        'Bramus\\Ansi\\ControlFunctions\\Tab' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlFunctions/Tab.php',
        'Bramus\\Ansi\\ControlSequences\\Base' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlSequences/Base.php',
        'Bramus\\Ansi\\ControlSequences\\EscapeSequences\\Base' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlSequences/EscapeSequences/Base.php',
        'Bramus\\Ansi\\ControlSequences\\EscapeSequences\\ED' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlSequences/EscapeSequences/ED.php',
        'Bramus\\Ansi\\ControlSequences\\EscapeSequences\\EL' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlSequences/EscapeSequences/EL.php',
        'Bramus\\Ansi\\ControlSequences\\EscapeSequences\\Enums\\ED' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlSequences/EscapeSequences/Enums/ED.php',
        'Bramus\\Ansi\\ControlSequences\\EscapeSequences\\Enums\\EL' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlSequences/EscapeSequences/Enums/EL.php',
        'Bramus\\Ansi\\ControlSequences\\EscapeSequences\\Enums\\FinalByte' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlSequences/EscapeSequences/Enums/FinalByte.php',
        'Bramus\\Ansi\\ControlSequences\\EscapeSequences\\Enums\\SGR' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlSequences/EscapeSequences/Enums/SGR.php',
        'Bramus\\Ansi\\ControlSequences\\EscapeSequences\\SGR' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlSequences/EscapeSequences/SGR.php',
        'Bramus\\Ansi\\ControlSequences\\Traits\\HasFinalByte' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlSequences/Traits/HasFinalByte.php',
        'Bramus\\Ansi\\ControlSequences\\Traits\\HasIntermediateBytes' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlSequences/Traits/HasIntermediateBytes.php',
        'Bramus\\Ansi\\ControlSequences\\Traits\\HasParameterBytes' => __DIR__ . '/..' . '/bramus/ansi-php/src/ControlSequences/Traits/HasParameterBytes.php',
        'Bramus\\Ansi\\Traits\\ControlFunctions' => __DIR__ . '/..' . '/bramus/ansi-php/src/Traits/ControlFunctions.php',
        'Bramus\\Ansi\\Traits\\EscapeSequences\\ED' => __DIR__ . '/..' . '/bramus/ansi-php/src/Traits/EscapeSequences/ED.php',
        'Bramus\\Ansi\\Traits\\EscapeSequences\\EL' => __DIR__ . '/..' . '/bramus/ansi-php/src/Traits/EscapeSequences/EL.php',
        'Bramus\\Ansi\\Traits\\EscapeSequences\\SGR' => __DIR__ . '/..' . '/bramus/ansi-php/src/Traits/EscapeSequences/SGR.php',
        'Bramus\\Ansi\\Writers\\BufferWriter' => __DIR__ . '/..' . '/bramus/ansi-php/src/Writers/BufferWriter.php',
        'Bramus\\Ansi\\Writers\\FlushableInterface' => __DIR__ . '/..' . '/bramus/ansi-php/src/Writers/FlushableInterface.php',
        'Bramus\\Ansi\\Writers\\ProxyWriter' => __DIR__ . '/..' . '/bramus/ansi-php/src/Writers/ProxyWriter.php',
        'Bramus\\Ansi\\Writers\\StreamWriter' => __DIR__ . '/..' . '/bramus/ansi-php/src/Writers/StreamWriter.php',
        'Bramus\\Ansi\\Writers\\WriterInterface' => __DIR__ . '/..' . '/bramus/ansi-php/src/Writers/WriterInterface.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited6a6fef3b79c734c90c6203817cd8e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited6a6fef3b79c734c90c6203817cd8e1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInited6a6fef3b79c734c90c6203817cd8e1::$classMap;

        }, null, ClassLoader::class);
    }
}