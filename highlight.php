<?php

// Start of highlight v.

/**
 * Manages access to installation directories
 * Apart from the standard installation directory, one can define additional
 * search paths. If the additional paths do not exist, the default paths are
 * returned
 *
 * @param $res
 * @return instance
 */
function new_datadir ($res=null) {}

/**
 * Set additional installation directory
 *
 * @param $location
 * @return string
 */
function datadir_lsb_data_dir_set ($location) {}

/**
 * return standard installation directory
 * @return string
 */
function datadir_lsb_data_dir_get () {}

/**
 * Set additional configuration directory
 *
 * @param $location
 */
function datadir_lsb_cfg_dir_set ($location) {}

/**
 * return standard configuration directory
 * @return string
 */
function datadir_lsb_cfg_dir_get () {}

/**
 * Set additional documentation directory
 *
 * @param $location
 */
function datadir_lsb_doc_dir_set ($location) {}

/**
 * return documentation directory
 * @return string
 */
function datadir_lsb_doc_dir_get () {}

/**
 * search for a valid installation directory
 *
 * @param $instance instance DataDir
 * @param string $userDefineDir Directory defined by user
 * @return bool True if directory was found
 */
function datadir_searchdatadir ($instance,$userDefineDir) {}

/**
 * add another installation directory, which is added to search path
 *
 * @param $instance instance DataDir
 * @param string $dir Directory defined by user
 */
function datadir_setadditionalconfdir ($instance,$dir) {}

/**
 * return data Directory defined by user
 *
 * @param $instance instance of DataDir
 * @return string
 */
function datadir_getadditionalconfdir ($instance) {}

/**
 * return Data installation directory
 *
 * @param $instance instance of DataDir
 * @return string
 */
function datadir_getdir ($instance) {}

/**
 * return Location of language definitions
 *
 * @param $instance
 * @param string $file
 * @param bool $forceDefault set true if additional directory should be ignored
 * @return string Location of language definitions
 */
function datadir_getlangpath ($instance,$file=null,$forceDefault=false) {}

/**
 * return Location of themes
 *
 * @param $instance instance DataDir
 * @param string $file filename
 * @param bool $forceDefault set true if additional directory should be ignored
 * @return string Location of themes
 */
function datadir_getthemepath ($instance,$file=null,$forceDefault=false) {}

/**
 * return Location of configuration files
 *
 * @param $instance instance of DataDir
 * @param bool $forceDefault set true if additional directory should be ignored
 * @return string
 */
function datadir_getconfdir ($instance,$forceDefault=false) {}

/**
 * return Location of GUI menu translation files
 *
 * @param $instance instance of DataDir
 */
function datadir_geti18ndir ($instance) {}

/**
 * return Location of GUI file extension filter files
 *
 * @param $instance instance of DataDir
 * @return string
 */
function datadir_getextdir ($instance) {}

/**
 * return Location of documentation (README) files (GUI)
 *
 * @param $instance instance of DataDir
 * @return string
 */
function datadir_getdocdir ($instance) {}

function new_syntaxreader () {}

/**
 * return Failed regular expression
 *
 * @return string regexErrorMsg
 */
function syntaxreader_getfailedregex () {}

/**
 * return Failed Lua exception description
 *
 * @return string luaErrorMsg
 */
function syntaxreader_getluaerrortext () {}

/**
 * return Prefix of raw strings
 *
 * @return string rawStringPrefix
 */
function syntaxreader_getrawstringprefix () {}

/**
 * return Continuation Character
 *
 * @return string continuationChar
 */
function syntaxreader_getcontinuationchar () {}

/**
 * @return bool true if syntax highlighting is enabled
 */
function syntaxreader_highlightingenabled () {}

/**
 * @return bool True if language is case sensitive
 */
function syntaxreader_isignorecase () {}

/**
 * @param string $s
 * @return int class id of keyword, 0 if s is not a keyword
 */
function syntaxreader_iskeyword ($s) {}

/**
 * Load new language definition
 * Will only read a new language definition if the given
 * file path is not equal to the path of the current language definition
 *
 * @param string $langDefPath
 * @param string $pluginReadFilePath
 * @param outputType $outputType
 * @param bool $clear
 * @return LoadResult
 */
function syntaxreader_load ($langDefPath,$pluginReadFilePath,$outputType,$clear=true) {}

/**
 * @return book True if multi line comments may be nested
 */
function syntaxreader_allownestedmlcomments () {}

/**
 * @return bool true if highlighting is disabled
 */
function syntaxreader_highlightingdisabled () {}

/**
 * @param string $langDefPath path to language definition
 * @return bool true if the next load() call would load a new language definition
 */
function syntaxreader_needsreload ($langDefPath) {}

/**
 * @return bool true if current language may be reformatted (c, c++, c#, java)
 */
function syntaxreader_enablereformatting () {}
/**
 * @return const KeywordMap
 */
function syntaxreader_getkeywords () {}

/**
 * @return string keyword classes
 */
function syntaxreader_getkeywordclasses () {}

/**
 * @return regular expressions
 */
function syntaxreader_getregexelements () {}

/**
 * return description of the programming language
 *
 * @return string langDesc
 */
function syntaxreader_getdescription () {}

/**
 * @param int $delimID delimiter id
 * @return bool true if no closing delimiter exists (open and close delimiters are equal)
 */
function syntaxreader_delimiterisdistinct ($delimID) {}

/**
 * @param int $delimID delimiter id
 * @return bool true,  if delimiter indicates a raw string
 */
function syntaxreader_delimiterisrawstring ($delimID) {}

/**
 * Pairs of open/close delimiters have a unique ID to test if two tokens act as delimiters
 *
 * @param string $token token delimiter token
 * @param string $s State of delimiter
 * @return int delimiter id
 */
function syntaxreader_getopendelimiterid ($token,$s) {}

/**
 *  Pairs of open/close delimiters have a unique ID to test if two tokens act as delimiters
 *
 * @param string $token delimiter token
 * @param $s State of delimiter
 * @param int $delimId opening delimiter retrieved with getOpenDelimiterID
 * @return book true if delimiter id of token matches openDelimID
 */
function syntaxreader_matchesopendelimiter ($token,$s,$delimId) {}

/**
 * initializes end delimiter regex to switch back to host language
 *
 * @param string $langPath path of embedded language definition
 *
 */
function syntaxreader_restorelangenddelim ($langPath) {}

/**
 * @param string $lang language definition name  (no path, no ".lang" extension)
 * @return string absolute path based on the previously loaded definition
 */
function syntaxreader_getnewpath ($lang) {}

/**
 * @return string absolute path of currently loaded definition
 */
function syntaxreader_getcurrentpath () {}

/**
 * @return pointer to state validation function
 */
function syntaxreader_getvalidatestatechangefct () {}

/**
 * @return pointer to state decorate function
 */
function syntaxreader_getdecoratefct () {}

/**
 * @return pointer to Lua state
 */
function syntaxreader_getluastate () {}

/**
 * @param $chunk  Lua function to be added to the function list
 */
function syntaxreader_adduserchunk ($chunk) {}

/**
 * @param $ls Lua state to be initialized with constants
 * @param $langDefPath absolute path of language definition
 * @param $pluginReadFilePath absolute path of plugin input file
 * @param $outputType
 */
function syntaxreader_initluastate ($ls,$langDefPath,$pluginReadFilePath,$outputType=HTML) {}

/**
 * Association of a regex with a state description
 * A RegexElement associates a regular expression with the state information
 * (opening and closing state, pattern, keyword class, keyword group id, language name)
 *
 * @param $oState
 * @param $eState
 * @param $Pattern
 * @param int $cID
 * @param $group
 * @param string $name
 */
function new_regexelement ($oState,$eState,$Pattern,$cID=0,$group=-1,$name="") {}

function regexelement_open_set () {}

function regexelement_open_get () {}

function regexelement_end_set () {}

function regexelement_end_get () {}

function regexelement_rex_set () {}

function regexelement_rex_get () {}

function regexelement_kwclass_set () {}

function regexelement_kwclass_get () {}

function regexelement_capturinggroup_set () {}

function regexelement_capturinggroup_get () {}

function regexelement_langname_set () {}

function regexelement_langname_get () {}

function regexelement_instancecnt_set () {}

function regexelement_instancecnt_get () {}

function regexelement_instanceid_set () {}

function regexelement_instanceid_get () {}

/**
 * Association of a regex and its relevant capturing group
 */
function new_regexdef () {}

function regexdef_restring_set () {}

function regexdef_restring_get () {}

function regexdef_capturinggroup_set () {}

function regexdef_capturinggroup_get () {}

function new_regroup () {}

function regroup_length_set () {}

function regroup_length_get () {}

function regroup_state_set () {}

function regroup_state_get () {}

function regroup_kwclass_set () {}

function regroup_kwclass_get () {}

function regroup_name_set () {}

function regroup_name_get () {}

/**
 * Get appropriate CodeGenerator instance
 *
 * @param int $outputType Output file type (HTML, XHTML, RTF, LATEX, TEX, ANSI, XTERM256)
 * @return CodeGenerator instance
 */
function codegenerator_getinstance ($outputType) {}

/**
 * Delete CodeGenerator instance
 *
 * @param $instance
 */
function codegenerator_deleteinstance ($instance) {}

/**
 * Define colour theme information; needs to be called before using a generate* method.
 * Call this method before codegenerator_loadlanguage()
 *
 * @param $instance
 * @param string $themePath Path of style description file
 * @return bool true if successful
 */
function codegenerator_inittheme ($instance,$themePath) {}

/**
 * return description of the theme init error
 *
 * @param $instance
 * @return string description of the theme init error
 */
function codegenerator_getthemeiniterror ($instance) {}

/**
 * @param $instance
 * @return string description of the plug-in script error
 */
function codegenerator_getpluginscripterror ($instance) {}

/**
 * initialize source code indentation and reformatting scheme.
 * needs to be called before using a generate* method
 *
 * @param $instance
 * @param string $indentScheme string Name of indentation scheme. allman, banner, gnu,
 * horstmann, java, kr, linux, otbs,stroustrup, whitesmith
 * @return bool true if successfull
 */
function codegenerator_initindentationscheme ($instance,$indentScheme) {}

/**
 * Load ctags meta information; needs to be called before using a generate* method
 *
 * @param $instance
 * @param string $ctagsPath Path of tags file
 * @return bool true if successfull
 */
function codegenerator_inittaginformation ($instance,$ctagsPath) {}

/**
 *
 *
 * @param $instance
 * @param string $langDefPath Absolute path to language definition, may be used multiple times for a generator instance
 * @return LOAD_OK|LOAD_FAILED|LOAD_FAILED_REGEX|LOAD_FAILED_LUA
 */
function codegenerator_loadlanguage ($instance,$langDefPath) {}

/**
 * Generate output file from input file
 *
 * @param $instance
 * @param string $inFileName Path of input file
 * @param string $outFileName Path of output file
 * @return ParseError
 */
function codegenerator_generatefile ($instance,$inFileName,$outFileName) {}

/**
 * Generate output string from input string
 *
 * @param $instance
 * @param string $input input code string
 * @return string formatted output code
 */
function codegenerator_generatestring ($instance,$input) {}

/**
 * Generate output string from input file
 *
 * @param $instance
 * @param string $inFileName file path
 * @return string formatted output code
 */
function codegenerator_generatestringfromfile ($instance,$inFileName) {}

/**
 * Print style definitions to external file or stdout
 *
 * @param $instance
 * @param string $outFile Path of external style definition; print to stdout if empty
 * @return bool true if successfull
 */
function codegenerator_printexternalstyle ($instance,$outFile) {}

/**
 * Print index file with all input file names
 *
 * @param $instance
 * @param array $fileList List of output file names
 * @param string $outPath Output path
 * @return bool true if successfull
 */
function codegenerator_printindexfile ($instance,$fileList,$outPath) {}

/**
 * define the preformatting parameters. Preformatting takes place before
 * the optional astyle reformatting and indenting is performed
 * (defined by codegenerator_initindentscheme)
 *
 * @param $instance
 * @param $lineWrappingStyle wrapping style (WRAP_DISABLED|WRAP_SIMPLE|WRAP_DEFAULT)
 * @param int $lineLength max line length
 * @param int $numberSpaces number of spaces which replace a tab
 */
function codegenerator_setpreformatting ($instance,$lineWrappingStyle,$lineLength,$numberSpaces) {}

/**
 * @deprecated
 *
 * @param $instance
 * @return bool true if document style was found
 */
function codegenerator_stylefound ($instance) {}

/**
 * @param $instance
 * @return bool true if reformatting of current input is disabled
 */
function codegenerator_formattingdisabled ($instance) {}

/**
 * @param $instance
 * @return bool true if reformatting of current input is possible
 */
function codegenerator_formattingispossible ($instance) {}

/**
 * output line numbers
 *
 * @param $instance
 * @param bool $flag true if line numbers should be printed
 * @param int $startCnt int line number starting count. default 1
 */
function codegenerator_setprintlinenumbers ($instance,$flag,$startCnt=1) {}

/**
 * return line number flag
 *
 * @param $instance
 * @return bool
 */
function codegenerator_getprintlinenumbers ($instance) {}

/**
 * output line numbers filled with zeroes
 *
 * @param $instance
 * @param bool $flag  true if zeroes should be printed
 */
function codegenerator_setprintzeroes ($instance,$flag) {}

/**
 * return print zeroes flag
 *
 * @param $instance
 * @return bool
 */
function codegenerator_getprintzeroes ($instance) {}

/**
 * omit document header and footer
 *
 * @param $instance
 * @param bool $flag true if output should be fragmented
 */
function codegenerator_setfragmentcode ($instance,$flag) {}

/**
 * return fragment flag
 *
 * @param $instance
 * @return bool fragment flag
 */
function codegenerator_getfragmentcode ($instance) {}

/**
 * define line number width
 *
 * @param $instance
 * @param int $width width
 */
function codegenerator_setlinenumberwidth ($instance,$width) {}

/**
 * return line number width
 *
 * @param $instance
 * @return int line number width
 */
function codegenerator_getlinenumberwidth ($instance) {}

/**
 * check if input is binary or text
 *
 * @param $instance
 * @param bool $flag true if input should be checked
 */
function codegenerator_setvalidateinput ($instance,$flag) {}

/**
 * return input validation flag
 *
 * @param $instance
 * @return bool
 */
function codegenerator_getvalidateinput ($instance) {}

/**
 *
 *
 * @param $instance
 * @param bool $flag true wrapped lines receive unique line numbers. bool false
 * wrapped lines don't have line numbers at all
 *
 */
function codegenerator_setnumberwrappedlines ($instance,$flag) {}

/**
 * return number wrapped lines flag
 *
 * @param $instance
 * @return bool
 */
function codegenerator_getnumberwrappedlines ($instance) {}

/**
 * return style path
 *
 * @param $instance
 * @return string style path
 */
function codegenerator_getstylename ($instance) {}

/**
 * use this font as base font, e.g "Courier New"
 *
 * @param $instance
 * @param string $fontName font name
 */
function codegenerator_setbasefont ($instance,$fontName) {}

/**
 * return base font
 *
 * @param $instance
 * @return string
 */
function codegenerator_getbasefont ($instance) {}

/**
 * use this size as base font size
 *
 * @param $instance
 * @param string $fontSize font size
 */
function codegenerator_setbasefontsize ($instance,$fontSize) {}

/**
 * return base font size
 *
 * @param $instance
 * @return string
 */
function codegenerator_getbasefontsize ($instance) {}

/**
 * tell parser the include style definition in output
 *
 * @param $instance
 * @param bool $flag true if style should be included
 */
function codegenerator_setincludestyle ($instance,$flag) {}

/**
 * tell parser to omit trailing newline character
 *
 * @param $instance
 * @param bool $flag true if no trailing newline should be printed
 */
function codegenerator_disabletrailingnl ($instance,$flag) {}

/**
 * Set style input path
 *
 * @param $instance
 * @param string $inputPath path to style input file
 */
function codegenerator_setstyleinputpath ($instance,$inputPath) {}

/**
 * Set style output path
 *
 * @param $instance
 * @param string $outputPath path to style output file
 */
function codegenerator_setstyleoutputpath ($instance,$outputPath) {}

/**
 * Set encoding (output encoding must match input file)
 *
 * @param $instance
 * @param string $encodingName encoding name
 */
function codegenerator_setencoding ($instance,$encodingName) {}

/**
 * return style input file path
 *
 * @param $instance
 * @return string
 */
function codegenerator_getstyleinputpath ($instance) {}

/**
 * return style output file path
 *
 * @param $instance
 * @return string
 */
function codegenerator_getstyleoutputpath ($instance) {}

/**
 * @param $instance
 * @param string $title Document title
 */
function codegenerator_settitle ($instance,$title) {}

/**
 * return document title
 *
 * @param $instance
 * @return string
 */
function codegenerator_gettitle ($instance) {}

/**
 * @param $instance
 * @param int $cnt maximum number of input lines to be processed
 */
function codegenerator_setmaxinputlinecnt ($instance,$cnt) {}

/**
 * @param $instance
 * @param CASE_UNCHANGED|CASE_LOWER|CASE_UPPER|CASE_CAPITALIZE $case
 */
function codegenerator_setkeywordcase ($instance,$case) {}

/**
 * @param $instance
 * @param string $delim End of line delimiter (default: NL)
 */
function codegenerator_seteoldelimiter ($instance,$delim) {}

/**
 * Define the name of a nested langage which is located at the beginning of input
 * The opening embedded delimiter is missing, but the closing delimiter must exist
 *
 * @param $instance
 * @param string $langName name of nested language
 */
function codegenerator_setstartingnestedlang ($instance,$langName) {}

/**
 * @param $instance
 * @param string $path path of plugin input file
 */
function codegenerator_setpluginreadfile ($instance,$path) {}

/**
 * Load the Lua functions og the plug-in script
 *
 * @param $instance
 * @param string $script path of the plug-in script
 * @return bool
 */
function codegenerator_initpluginscript ($instance,$script) {}

/**
 * eturn Syntaxreader Regex error message
 *
 * @param $instance
 * @return string Syntaxreader Regex error message
 */
function codegenerator_getsyntaxregexerror ($instance) {}

/**
 * Syntaxreader Lua error message
 *
 * @param $instance
 * @return string Syntaxreader Lua error message
 */
function codegenerator_getsyntaxluaerror ($instance) {}

/**
 * return Syntaxreader description
 *
 * @param $instance
 */
function codegenerator_getsyntaxdescription ($instance) {}

/**
 * @param $instance
 * @return string Syntaxreader description
 */
function codegenerator_getsyntaxreader ($instance) {}

/**
 * set HTML output anchor flag
 *
 * @param $instance
 * @param bool $arg
 */
function codegenerator_sethtmlattachanchors ($instance,$arg) {}

/**
 * set HTML output ordered list flag
 *
 * @param $instance
 * @param bool $arg
 */
function codegenerator_sethtmlorderedlist ($instance,$arg) {}

/**
 * set HTML output inline CSS flag
 *
 * @param $instance
 * @param bool $arg
 */
function codegenerator_sethtmlinlinecss ($instance,$arg) {}

/**
 * set HTML output enclose pre tag flag
 *
 * @param $instance
 * @param bool $arg
 */
function codegenerator_sethtmlenclosepretag ($instance,$arg) {}

/**
 * set HTML output replace space by &nbsp; flag
 *
 * @param $instance
 * @param bool $arg
 */
function codegenerator_sethtmlusenonbreakingspace ($instance,$arg) {}

/**
 * set HTML output anchor prefix
 *
 * @param $instance
 * @param string $arg
 */
function codegenerator_sethtmlanchorprefix ($instance,$arg) {}

/**
 * set HTML output class name
 *
 * @param $instance
 * @param string $arg
 */
function codegenerator_sethtmlclassname ($instance,$arg) {}

/**
 * set LaTeX replace quotes flag
 *
 * @param $instance
 * @param string $arg
 */
function codegenerator_setlatexreplacequotes ($instance,$arg) {}

/**
 * set LaTeX no Babel shorthands flag
 *
 * @param $instance
 * @param bool $arg
 */
function codegenerator_setlatexnoshorthands ($instance,$arg) {}

/**
 * set LaTeX pretty Symbols flag
 *
 * @param $instance
 * @param bool $arg
 */
function codegenerator_setlatexprettysymbols ($instance,$arg) {}

/**
 * set RTF page size
 *
 * @param $instance
 * @param bool $arg
 */
function codegenerator_setrtfpagesize ($instance,$arg) {}

/**
 * set RTF output character styles flag
 *
 * @param $instance
 * @param bool $arg
 */
function codegenerator_setrtfcharstyles ($instance,$arg) {}

/**
 * set SVG page size
 *
 * @param $instance
 * @param string $arg1
 * @param string $arg2
 */
function codegenerator_setsvgsize ($instance,$arg1,$arg2) {}

function swig_highlight_alter_newobject () {}

function swig_highlight_get_newobject () {}

define ('STANDARD', 0);
define ('STRING', 1);
define ('NUMBER', 2);
define ('SL_COMMENT', 3);
define ('ML_COMMENT', 4);
define ('ESC_CHAR', 5);
define ('DIRECTIVE', 6);
define ('DIRECTIVE_STRING', 7);
define ('LINENUMBER', 8);
define ('SYMBOL', 9);
define ('STRING_INTERPOLATION', 10);
define ('KEYWORD', 11);
define ('STRING_END', 12);
define ('NUMBER_END', 13);
define ('SL_COMMENT_END', 14);
define ('ML_COMMENT_END', 15);
define ('ESC_CHAR_END', 16);
define ('DIRECTIVE_END', 17);
define ('SYMBOL_END', 18);
define ('STRING_INTERPOLATION_END', 19);
define ('KEYWORD_END', 20);
define ('IDENTIFIER_BEGIN', 21);
define ('IDENTIFIER_END', 22);
define ('EMBEDDED_CODE_BEGIN', 23);
define ('EMBEDDED_CODE_END', 24);
define ('_UNKNOWN', 100);
define ('_EOL', 101);
define ('_EOF', 102);
define ('_WS', 103);
define ('PARSE_OK', 0);
define ('BAD_INPUT', 1);
define ('BAD_OUTPUT', 2);
define ('BAD_STYLE', 4);
define ('BAD_BINARY', 8);
define ('WRAP_DISABLED', 0);
define ('WRAP_SIMPLE', 1);
define ('WRAP_DEFAULT', 2);
define ('LOAD_OK', 0);
define ('LOAD_FAILED', 1);
define ('LOAD_FAILED_REGEX', 2);
define ('LOAD_FAILED_LUA', 3);
define ('HTML', 0);
define ('XHTML', 1);
define ('TEX', 2);
define ('LATEX', 3);
define ('RTF', 4);
define ('ANSI', 5);
define ('XTERM256', 6);
define ('HTML32', 7);
define ('SVG', 8);
define ('BBCODE', 9);
define ('ODTFLAT', 10);
define ('GLOBAL_INSTANCE_NAME', "HL_SRInstance");

// End of highlight v.
?>
