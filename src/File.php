<?php

namespace React\Http;

use React\Stream\ReadableStreamInterface;

class File implements FileInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $filename;

    /**
     * @var string
     */
    protected $contentType;

    /**
     * @var ReadableStreamInterface
     */
    protected $stream;

    /**
     * @param string $name
     * @param string $filename
     * @param string $contentType
     * @param ReadableStreamInterface $stream
     */
    public function __construct($name, $filename, $contentType, ReadableStreamInterface $stream)
    {
        $this->name = $name;
        $this->filename = $filename;
        $this->contentType = $contentType;
        $this->stream = $stream;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @return ReadableStreamInterface
     */
    public function getStream()
    {
        return $this->stream;
    }
}
