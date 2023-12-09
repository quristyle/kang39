package kr.co.jsini.kang39.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class mainController {
	
    
	@RequestMapping("")
	public String main(Model model) {
		System.out.println("show index");
        //model.addAttribute("data", "hello ~!");
		return "content/index";
	}
    
	
	@GetMapping("main")
	public String main() {
		return "content/main";
	}

}