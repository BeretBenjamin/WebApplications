using System.ComponentModel.DataAnnotations;

namespace WebExam.Models
{
    public class User
    {
        [Required]
        public int UserID { get; set; }
        [Required]
        public string UserName { get; set; }
        [Required]
        public string Password { get; set; }
    }
}
