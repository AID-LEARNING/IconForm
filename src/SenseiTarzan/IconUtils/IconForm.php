<?php
namespace SenseiTarzan\IconUtils;

class IconForm
{
    private string $path;
    private int $type;
    public function __construct(string $path)
    {
        $this->path = $path;
        $this->type = (str_starts_with($path, 'https://') || str_starts_with($path, 'http://')) ? 1 : ($path === "" ? -1 : 0);

    }

    public static function create(string $path): IconForm{
        return new IconForm($path);
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

}