<?
/**
 * @Entity @Table(name="examples")
 **/
class Example {
  /** @Id @Column(type="integer") @GeneratedValue **/
  protected $id;

  /** @Column(type="string") **/
  protected $title;

  /** @Column(type="string") **/
  protected $content;
}
?>
